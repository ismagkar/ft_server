# **************************************************************************** #
#                                                                              #
#                                                         :::      ::::::::    #
#    Dockerfile                                         :+:      :+:    :+:    #
#                                                     +:+ +:+         +:+      #
#    By: semery <semery@student.21-school.ru>       +#+  +:+       +#+         #
#                                                 +#+#+#+#+#+   +#+            #
#    Created: 2020/09/17 14:58:05 by semery            #+#    #+#              #
#    Updated: 2020/09/18 17:10:37 by semery           ###   ########.fr        #
#                                                                              #
# **************************************************************************** #

FROM debian:buster

RUN apt-get update
RUN apt-get upgrade
RUN apt-get -y install nano openssl wget curl nginx mariadb-server php-fpm php-mysql wordpress
RUN apt-get -y install php-mbstring php-zip php-gd php-curl php-intl php-soap php-xml php-xmlrpc

COPY ./srcs/init_services.sh ./
COPY ./srcs/mysql_init.sql ./
COPY ./srcs/nginx_config /etc/nginx/sites-available/semery
COPY ./srcs/autoindex.sh ./
COPY ./srcs/semery.key /etc/ssl/private/
COPY ./srcs/semery.crt /etc/ssl/certs/


ADD https://files.phpmyadmin.net/phpMyAdmin/5.0.2/phpMyAdmin-5.0.2-all-languages.tar.gz phpmyadmin.tar.gz
RUN tar xvf phpmyadmin.tar.gz
RUN mkdir /var/www/semery
RUN mv phpMyAdmin-5.0.2-all-languages /var/www/semery/phpmyadmin
RUN mv /usr/share/wordpress /var/www/semery

COPY ./srcs/phpmyadmin.inc.php /var/www/semery/phpmyadmin
COPY ./srcs/wp-config.php /var/www/semery/wordpress

RUN chown -R www-data /var/www/semery

EXPOSE 80 443

RUN service mysql start && mysql < mysql_init.sql

ENTRYPOINT bash init_services.sh
