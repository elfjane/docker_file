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
GIT_NAME=bmweb

HTML_SRC=$GIT_PATH/$GIT_NAME
HTML_DESC=$ROOT_PATH/web
HTML_PUBLIC=/var/www/web/bi
HTML_ZIP=${ROOT_PATH}/zip/${GIT_NAME}

# auto create git
mkdir -p ${GIT_PATH}

# auto create laravel storage
mkdir -p ${LOG_PATH}/temp
mkdir -p ${LOG_PATH}/logs/var
mkdir -p ${LOG_PATH}/logs/tar
mkdir -p ${LOG_PATH}/logs/ini
mkdir -p ${LOG_PATH}/smarty2/admin_lte3/templates_c

echo chmod 777 ${LOG_PATH}/logs -R
chmod 777 ${LOG_PATH}/logs -R

echo chmod 777 ${LOG_PATH}/temp -R
chmod 777 ${LOG_PATH}/temp -R

echo chmod 777 ${LOG_PATH}/smarty2 -R
chmod 777 ${LOG_PATH}/smarty2 -R

echo chmod 777 ${ROOT_PATH}/logs_nginx -R
chmod 777 ${ROOT_PATH}/logs_nginx -R

i_bi_logs=${HTML_DESC}/logs
if [ -d "$i_bi_logs" ]; then
  ### Take action if $i_laravel_log exists ###
  echo "${i_bi_logs} exists"
else
  ###  Control will jump here if $i_bi_logs does NOT exists ###
  cd $HTML_DESC && ln -s ${LOG_PATH}/logs
fi

i_bi_temp=${HTML_DESC}/temp
if [ -d "$i_bi_temp" ]; then
  ### Take action if $i_laravel_log exists ###
  echo "${i_bi_temp} exists"
else
  ###  Control will jump here if $i_bi_temp does NOT exists ###
  cd $HTML_DESC && ln -s ${LOG_PATH}/temp
fi

i_bi_admin_lte3=${HTML_DESC}/views/smarty2/admin_lte3/templates_c
if [ -d "$i_bi_admin_lte3" ]; then
  ### Take action if $i_bi_admin_lte3 exists ###
  echo "${i_bi_logs} exists"
else
  ###  Control will jump here if $i_bi_admin_lte3 does NOT exists ###
  cd $HTML_DESC/views/smarty2/admin_lte3 && ln -s ${LOG_PATH}/smarty2/admin_lte3/templates_c
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
exclude=$HTML_SRC/api_tools/docker_file/web/php-build/exclude_bmweb.list
echo "rsync -avz --delete --exclude-from=${exclude} $HTML_SRC/ $HTML_DESC/"
rsync -avz --delete --exclude-from=${exclude} $HTML_SRC/ $HTML_DESC/

if [ "$COMPOSER_UPDATE" = true ] ; then
  cd $HTML_DESC && composer install && composer update
  cd $HTML_DESC/library/xmvc && composer install && composer update
fi

echo "start make .env config file"
#HTML_DESC_ENV=$HTML_DESC/.env
#cp $HTML_SRC/.env.example $HTML_DESC_ENV
#sed -i 's/CONFIG_DB_CONNECTION/$CONFIG_DB_CONNECTION/g' $HTML_DESC_ENV
#sed -i 's/CONFIG_DB_HOST/$CONFIG_DB_HOST/g' $HTML_DESC_ENV
#sed -i 's/CONFIG_DB_PORT/$CONFIG_DB_PORT/g' $HTML_DESC_ENV
#sed -i 's/CONFIG_DB_DATABASE/$CONFIG_DB_DATABASE/g' $HTML_DESC_ENV
#sed -i 's/CONFIG_DB_USERNAME/$CONFIG_DB_USERNAME/g' $HTML_DESC_ENV
#sed -i 's/CONFIG_DB_PASSWORD/$CONFIG_DB_PASSWORD/g' $HTML_DESC_ENV
#sed -i 's/CONFIG_DB_SEARCH_LIMIT/$CONFIG_DB_SEARCH_LIMIT/g' $HTML_DESC_ENV

php-fpm
