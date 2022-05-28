# **************************************************************************** #
#                                                                              #
#                                                         :::      ::::::::    #
#    Dockerfile                                         :+:      :+:    :+:    #
#                                                     +:+ +:+         +:+      #
#    By: CWatcher <cwatcher@student.21-school.r>    +#+  +:+       +#+         #
#                                                 +#+#+#+#+#+   +#+            #
#    Created: 2022/02/09 19:26:03 by CWatcher          #+#    #+#              #
#    Updated: 2022/05/20 21:06:50 by CWatcher         ###   ########.fr        #
#                                                                              #
# **************************************************************************** #

FROM debian
RUN apt-get update
#RUN apt-get install -y apt-utils
# apt-utils causes another even larger warning
# TODO: try this:
# RUN export DEBIAN_FRONTEND=noninteractive && ...

RUN apt-get install -y php7.4-fpm
# php-fpm before php to avoid apache installation
RUN apt-get install -y php7.4
RUN apt-get install -y wordpress
# TODO: avoid apache2 installation by wordpress

# Utils
RUN apt-get install -y telnet
RUN apt-get install -y mariadb-client
COPY tools/test.php /usr/share/wordpress


COPY conf/www.conf /etc/php/7.4/fpm/pool.d/
COPY conf/config-mariadb.php /etc/wordpress/config-default.php

RUN mkdir /run/php
RUN ln -s /usr/share/wordpress /var/www/wp

#RUN ln -s /etc/php /usr/share/wordpress/etc_php
#WRONG! The link is processed by a host

ENTRYPOINT ["/usr/sbin/php-fpm7.4", "--nodaemonize"]

#CMD cp /etc/php/ /var/www/html/wp/etc-php
#WRONG! CMD is args of ENTRYPOINT here

EXPOSE 9000
