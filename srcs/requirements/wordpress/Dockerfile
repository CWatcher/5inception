# **************************************************************************** #
#                                                                              #
#                                                         :::      ::::::::    #
#    Dockerfile                                         :+:      :+:    :+:    #
#                                                     +:+ +:+         +:+      #
#    By: CWatcher <cwatcher@student.21-school.r>    +#+  +:+       +#+         #
#                                                 +#+#+#+#+#+   +#+            #
#    Created: 2022/02/09 19:26:03 by CWatcher          #+#    #+#              #
#    Updated: 2022/02/10 17:19:54 by CWatcher         ###   ########.fr        #
#                                                                              #
# **************************************************************************** #

FROM debian:buster
RUN apt-get update
#RUN apt-get install -y apt-utils
# apt-utils causes another even larger warning
# try this:
# RUN export DEBIAN_FRONTEND=noninteractive && ...
RUN apt-get install -y php7.3-fpm && mkdir /run/php
# php-fpm before php to avoid apache installation
RUN apt-get install -y php
RUN apt-get install -y wordpress

RUN ln -s /usr/share/wordpress /var/www/html/wp
COPY conf/config-mariadb.php /etc/wordpress/

ENTRYPOINT ["/usr/sbin/php-fpm7.3", "--nodaemonize"]
EXPOSE 9000
