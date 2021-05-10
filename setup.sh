RED='\033[0;31m'
GREEN='\033[0;32m'
NC='\033[0m'

echo $RED
echo "Creating nginx container ..."
echo $NC
docker build -t nginx-image srcs/dockerfiles/nginx/
docker run -d -p 80:80 -p 443:443 nginx-image

echo $RED
echo "Creating wordpress container ..."
echo $NC
docker build -t wordpress-image srcs/dockerfiles/wordpress/
docker run -d -p 5050:5050 wordpress-image
