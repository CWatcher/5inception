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

RUN service mysql start && \
	mysql -e "CREATE DATABASE wp" && \
	mysql -e "CREATE USER 'wp'@'%' IDENTIFIED BY 'ft';" && \
	mysql -e "GRANT ALL PRIVILEGES ON wp.* TO wp@'%'"

CMD ["mysqld_safe"]
EXPOSE 3306
