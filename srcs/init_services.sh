# **************************************************************************** #
#                                                                              #
#                                                         :::      ::::::::    #
#    init_services.sh                                   :+:      :+:    :+:    #
#                                                     +:+ +:+         +:+      #
#    By: semery <semery@student.21-school.ru>       +#+  +:+       +#+         #
#                                                 +#+#+#+#+#+   +#+            #
#    Created: 2020/09/17 15:09:42 by semery            #+#    #+#              #
#    Updated: 2020/09/18 17:00:11 by semery           ###   ########.fr        #
#                                                                              #
# **************************************************************************** #

#NGINX

ln -s /etc/nginx/sites-available/semery /etc/nginx/sites-enabled/semery
rm -rf /etc/nginx/sites-enabled/default

service mysql start
service php7.3-fpm start
service nginx start
bash
