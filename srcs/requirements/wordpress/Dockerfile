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

FROM debian:buster
RUN apt-get update
#RUN apt-get install -y apt-utils
# apt-utils causes another even larger warning
# TODO: try this:
# RUN export DEBIAN_FRONTEND=noninteractive && ...
RUN apt-get install -y php7.3-fpm
# php-fpm before php to avoid apache installation
RUN apt-get install -y php7.3
RUN apt-get install -y wordpress
# TODO: avoid apache2 installation by wordpress
COPY conf/www.conf /etc/php/7.3/fpm/pool.d/
COPY conf/config-mariadb.php /etc/wordpress/
RUN ln -s /usr/share/wordpress /var/www/html/wp

ENTRYPOINT ["/usr/sbin/php-fpm7.3", "--nodaemonize"]
EXPOSE 9000
