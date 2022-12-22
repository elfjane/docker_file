#!/bin/bash
# install global install
ROOT_PATH=$API_PATH
LOG_PATH=${ROOT_PATH}/logs

# git config
GIT_PATH=${ROOT_PATH}/git_project
GIT_URL=$GIT_URL
GIT_BRANCH=$GIT_BRANCH
GIT_ACCOUNT=$GIT_ACCOUNT
GIT_PASSWORD=$GIT_PASSWORD
GIT_NAME=bmapi

HTML_SRC=$GIT_PATH/$GIT_NAME
HTML_DESC=$ROOT_PATH/web
HTML_PUBLIC=/var/www/html
HTML_ZIP=${ROOT_PATH}/zip/${GIT_NAME}

# auto create git
mkdir -p ${GIT_PATH}

# auto create laravel storage
mkdir -p ${LOG_PATH}/storage/logs
mkdir -p ${LOG_PATH}/storage/logs/views
mkdir -p ${LOG_PATH}/storage/app/public
mkdir -p ${LOG_PATH}/storage/framework/cache/data
mkdir -p ${LOG_PATH}/storage/framework/sessions
mkdir -p ${LOG_PATH}/storage/framework/testing
mkdir -p ${LOG_PATH}/storage/framework/views

i_laravel_log=${LOG_PATH}/storage/logs/laravel.log
if [ -d "$i_laravel_log" ]; then
  ### Take action if $i_laravel_log exists ###
  echo "${i_laravel_log} exists"
else
  ###  Control will jump here if $i_laravel_log does NOT exists ###
  touch ${LOG_PATH}/storage/logs/laravel.log
fi

echo chmod 777 ${LOG_PATH}/storage -R
chmod 777 ${LOG_PATH}/storage -R

echo chmod 777 ${ROOT_PATH}/logs_nginx -R
chmod 777 ${ROOT_PATH}/logs_nginx -R

i_laravel_storage=${HTML_DESC}/storage
if [ -d "$i_laravel_storage" ]; then
  ### Take action if $i_laravel_log exists ###
  echo "${i_laravel_storage} exists"
else
  ###  Control will jump here if $DIR does NOT exists ###
  cd $HTML_DESC && ln -s ${LOG_PATH}/storage
fi

if [ -d "$HTML_SRC" ]; then
  ### Take action if $GIT_PATH exists ###
  echo "${HTML_SRC} exists"
else
  ###  Control will jump here if $DIR does NOT exists ###
  cd ${GIT_PATH}/ && git clone https://${GIT_ACCOUNT}:${GIT_PASSWORD}@${GIT_URL} ${GIT_NAME} 
  cd ${HTML_SRC} && git checkout ${GIT_BRANCH} && git pull origin
  cd ${HTML_SRC} && git pull origin
fi

# is backup source code
if [ "$BACKUP" = true ] ; then
  mkdir -p ${HTML_ZIP}
  echo 'Be start backup source core'
  BASE_DATETIME=$(date +"%Y%m%d_%H%M%S")
  zip_filename=${GIT_NAME}_${BASE_DATETIME}.tar.gz
  echo "${HTML_DESC} && tar --exclude=\"vendor\" -czvf ${HTML_ZIP}/${zip_filename} ."
  cd ${HTML_DESC} && tar --exclude="vendor" -czvf ${HTML_ZIP}/${zip_filename} . 
else	
  echo 'Be stop backup source core before'
fi

# start git pull source code
#ENV="develop"
ENV=$GIT_BRANCH

echo "cd $HTML_SRC && git pull && git checkout $ENV && git pull origin $ENV"
cd $HTML_SRC && git pull && git checkout $ENV && git pull origin $ENV


# /docker_file/api/php-build
exclude=$HTML_SRC/api_tools/docker_file/api/php-build/exclude_bmapi.list
echo "rsync -avz --delete --exclude-from=${exclude} $HTML_SRC/ $HTML_DESC/"
rsync -avz --delete --exclude-from=${exclude} $HTML_SRC/ $HTML_DESC/

i_laravel_bootstrap=${HTML_DESC}/bootstrap/cache
if [ -d "$i_laravel_bootstrap" ]; then
  ### Take action if $i_laravel_log exists ###
  echo "${i_laravel_storage} exists"
else
  ###  Control will jump here if $DIR does NOT exists ###
  mkdir -p $i_laravel_bootstrap
  chmod 777 -R $i_laravel_bootstrap
fi

if [ "$COMPOSER_UPDATE" = true ] ; then
  cd $HTML_DESC && composer install && composer update
fi

echo "start make .env config file"
HTML_DESC_ENV=$HTML_DESC/.env
cp $HTML_SRC/.env.example $HTML_DESC_ENV
sed -i "s/CONFIG_DB_CONNECTION/$CONFIG_DB_CONNECTION/g" $HTML_DESC_ENV
sed -i "s/CONFIG_DB_HOST/$CONFIG_DB_HOST/g" $HTML_DESC_ENV
sed -i "s/CONFIG_DB_PORT/$CONFIG_DB_PORT/g" $HTML_DESC_ENV
sed -i "s/CONFIG_DB_DATABASE/$CONFIG_DB_DATABASE/g" $HTML_DESC_ENV
sed -i "s/CONFIG_DB_USERNAME/$CONFIG_DB_USERNAME/g" $HTML_DESC_ENV
sed -i "s/CONFIG_DB_PASSWORD/$CONFIG_DB_PASSWORD/g" $HTML_DESC_ENV
sed -i "s/CONFIG_DB_SEARCH_LIMIT/$CONFIG_DB_SEARCH_LIMIT/g" $HTML_DESC_ENV

php-fpm
