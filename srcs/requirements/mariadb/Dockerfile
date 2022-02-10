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
RUN apt-get install -y php7.3-fpm
RUN apt-get install -y php
RUN echo 'deb http://deb.debian.org/debian buster-backports main' >> /etc/apt/sources.list && \
	apt-get update
RUN apt-get install -y php-twig/buster-backports
RUN export DEBIAN_FRONTEND=noninteractive && \
	apt-get install -y phpmyadmin

RUN ln -s /usr/share/phpmyadmin /var/www/html/pma
COPY conf/config.inc.php /etc/phpmyadmin/
RUN service mysql start && \
	mysql -e "CREATE USER pma@localhost IDENTIFIED BY 'ft';" && \
	mysql -e "GRANT ALL PRIVILEGES ON *.* TO pma@localhost"

RUN service mysql start && \
	mysql -e "CREATE USER wp@localhost IDENTIFIED BY 'ft';" && \
	mysql -e "GRANT ALL PRIVILEGES ON wp.* TO wp@localhost" && \
	mysql -e "CREATE DATABASE wp"

CMD /usr/bin/mysqld_safe && service php7.3-fpm start
