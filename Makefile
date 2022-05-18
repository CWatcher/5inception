AUTOINDEX = on

run: build
	docker-compose --project-directory srcs/ up

build: srcs/requirements/nginx/Dockerfile
	docker-compose --project-directory srcs/ build

stop:
	docker-compose --project-directory srcs/ stop

clean:
	docker-compose --project-directory srcs/ down

fclean: clean
	docker-compose --project-directory srcs/ down --rmi all

.PHONY: run build stop clean fclean
