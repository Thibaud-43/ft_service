RED='\033[0;31m'
GREEN='\033[0;32m'
NC='\033[0m'

echo $RED
echo "START COMPOSE ..."
echo $NC
docker-compose up -d -f srcs/docker-compose.yml
