# install global install
ROOT_PATH=$BLOXMITH_API_PATH
GIT_URL=$BLOXMITH_GIT_URL
GIT_BRANCH=$BLOXMITH_GIT_BRANCH
GIT_ACCOUNT=$BLOXMITH_GIT_ACCOUNT
GIT_PASSWORD=$BLOXMITH_GIT_PASSWORD

GIT_PATH=${ROOT_PATH}/git_project
LOG_PATH=${ROOT_PATH}/logs
GIT_NAME=bmapi

HTML_SRC=$GIT_PATH/$GIT_NAME
HTML_DESC=/var/www/html
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

i_laravel_log=${LOG_PATH}/storage/logs/laravel.log
if [ -d "$i_laravel_log" ]; then
  ### Take action if $i_laravel_log exists ###
  echo "${i_laravel_log} exists"
else
  ###  Control will jump here if $DIR does NOT exists ###
  touch ${LOG_PATH}/storage/logs/laravel.log
fi

chmod 777 ${LOG_PATH}/storage -R

i_laravel_storage=/var/www/html/storage
if [ -d "$i_laravel_storage" ]; then
  ### Take action if $i_laravel_log exists ###
  echo "${i_laravel_storage} exists"
else
  ###  Control will jump here if $DIR does NOT exists ###
  cd /var/www/html && ln -s ${LOG_PATH}/storage
  
fi

mkdir -p ${HTML_ZIP}

if [ -d "$GIT_PATH" ]; then
  ### Take action if $GIT_PATH exists ###
  echo "${GIT_PATH} exists"
else
  ###  Control will jump here if $DIR does NOT exists ###
	cd ${GIT_PATH}/ && git clone https://${GIT_ACCOUNT}:${GIT_PASSWORD}@${GIT_URL} ${GIT_NAME} 
	cd ${HTML_SRC} && git checkout ${GIT_BRANCH} && git pull origin
	cd ${HTML_SRC} && git pull origin
fi

# /docker_file/bloxmith_api/php-build
exclude=$HTML_SRC/bloxmith_api_tools/docker_file/bloxmith_api/php-build/exclude_bmapi.list

BASE_DATETIME=$(date +"%Y%m%d_%H%M%S")

#ENV="develop"
ENV=$GIT_BRANCH

# start command
cd $HTML_SRC && git pull && git checkout $ENV && git pull origin $ENV

zip_filename=${GIT_NAME}_${BASE_DATETIME}.tar.gz
cmd3="cd ${HTML_DESC} && tar -czvf ${HTML_ZIP}/${zip_filename} . --exclude=\"vendor\""
echo $cmd3
cd ${HTML_DESC} && tar -czvf ${HTML_ZIP}/${zip_filename} . --exclude="vendor"

cmd2="rsync -avz --delete --exclude-from=${exclude} $HTML_SRC/ $HTML_DESC/"
echo $cmd2
rsync -avz --delete --exclude-from=${exclude} $HTML_SRC/ $HTML_DESC/

cd $HTML_DESC && composer install && composer update

php-fpm
