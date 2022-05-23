AUTOINDEX = on

run: build
	mkdir -p data/mariadb data/wordpress
	mkdir -p etc/mariadb etc/wordpress
	docker-compose --project-directory srcs up -d

build:
	docker-compose --project-directory srcs build

stop:
	docker-compose --project-directory srcs stop

clean:
	docker-compose --project-directory srcs down -v
	trash data 2> /dev/null || return 0
	trash etc 2> /dev/null || return 0


#TODO: fclean: clean
fclean: clean
	docker-compose --project-directory srcs down --rmi all

re: clean run

.PHONY: run build stop clean fclean re
