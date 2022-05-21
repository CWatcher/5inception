AUTOINDEX = on

run: build
	mkdir -p data/wordpress data/mariadb
	mkdir -p mariadb/etc
	docker-compose --project-directory . up -d

build:
	docker-compose --project-directory . build

stop:
	docker-compose --project-directory . stop

clean:
	docker-compose --project-directory . down -v
	trash mariadb/etc 2> /dev/null || return 0


#TODO: fclean: clean
fclean: clean
	docker-compose --project-directory . down --rmi all
	trash data

re: clean run

.PHONY: run build stop clean fclean re
