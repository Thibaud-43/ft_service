all:			setup

setup :	
	docker-compose -f srcs/docker-compose.yml up -d
stop:
	docker-compose -f ./srcs/docker-compose.yml stop
start:
	docker-compose -f ./srcs/docker-compose.yml start
down:			stop
	docker-compose -f ./srcs/docker-compose.yml down
clean :			down
	docker rmi $(docker images -a -q)
ps:
	docker-compose -f ./srcs/docker-compose.yml ps
ip:				
	docker ps -q | xargs -n 1 docker inspect --format '{{ .NetworkSettings.IPAddress }} {{ .Name }}' | sed 's/ \// /'
.PHONY:			all clean fclean re bonus