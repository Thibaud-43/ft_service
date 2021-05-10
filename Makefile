
all:			setup

setup :		
				./srcs/requirements/tools/setup.sh
clean:
				./srcs/requirements/tools/clean_containers.sh
fclean:			clean
				./srcs/requirements/tools/clean_images.sh 

re:				fclean setup
ip:				
				docker ps -q | xargs -n 1 docker inspect --format '{{ .NetworkSettings.IPAddress }} {{ .Name }}' | sed 's/ \// /'
.PHONY:			all clean fclean re bonus