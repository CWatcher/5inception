AUTOINDEX = on

run:
	mkdir -p data/wordpress data/mariadb
	docker-compose --project-directory srcs/ up -d

build: srcs/requirements/nginx/Dockerfile
	docker-compose --project-directory srcs/ build

stop:
	docker-compose --project-directory srcs/ stop

clean:
	docker-compose --project-directory srcs/ down -v

#TODO: fclean: clean
fclean:
	docker-compose --project-directory srcs/ down --rmi all

.PHONY: run build stop clean fclean
