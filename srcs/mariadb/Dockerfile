# **************************************************************************** #
#                                                                              #
#                                                         :::      ::::::::    #
#    Dockerfile                                         :+:      :+:    :+:    #
#                                                     +:+ +:+         +:+      #
#    By: CWatcher <cwatcher@student.21-school.r>    +#+  +:+       +#+         #
#                                                 +#+#+#+#+#+   +#+            #
#    Created: 2022/02/09 19:26:03 by CWatcher          #+#    #+#              #
#    Updated: 2022/02/10 15:04:09 by CWatcher         ###   ########.fr        #
#                                                                              #
# **************************************************************************** #

FROM debian:buster
RUN apt-get update
RUN apt-get install -y mariadb-server

COPY conf/50-server.cnf /etc/mysql/mariadb.conf.d/

ARG WP_DB_NAME
ARG WP_DB_USER
ARG WP_DB_PASSWORD
RUN service mysql start && \
	mysql -e "CREATE DATABASE ${WP_DB_NAME}" && \
	mysql -e "CREATE USER '${WP_DB_USER}'@'%' IDENTIFIED BY '${WP_DB_PASSWORD}';" && \
	mysql -e "GRANT ALL PRIVILEGES ON wp.* TO '${WP_DB_USER}'@'%'"

COPY conf/wp.sql .
RUN service mysql start && \
	mysql wp < wp.sql && \
	rm wp.sql

ARG MYSQL_ROOT_PASSWORD
RUN service mysql start && \
	mysqladmin -u root password ${MYSQL_ROOT_PASSWORD}

CMD ["mysqld_safe"]
EXPOSE 3306
