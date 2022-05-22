AUTOINDEX = on

run: build
	mkdir -p data/mariadb data/wordpress
	mkdir -p etc/mariadb etc/wordpress
	docker-compose --project-directory . up -d

build:
	docker-compose --project-directory . build

stop:
	docker-compose --project-directory . stop

clean:
	docker-compose --project-directory . down -v
	trash etc 2> /dev/null || return 0


#TODO: fclean: clean
fclean: clean
	docker-compose --project-directory . down --rmi all
	trash data

re: clean run

.PHONY: run build stop clean fclean re
