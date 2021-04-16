# **************************************************************************** #
#                                                                              #
#                                                         :::      ::::::::    #
#    Dockerfile                                         :+:      :+:    :+:    #
#                                                     +:+ +:+         +:+      #
#    By: lunovill <lunovill@student.42.fr>          +#+  +:+       +#+         #
#                                                 +#+#+#+#+#+   +#+            #
#    Created: 2021/04/09 17:36:33 by lunovill          #+#    #+#              #
#    Updated: 2021/04/09 17:38:38 by lunovill         ###   ########.fr        #
#                                                                              #
# **************************************************************************** #

FROM debian:buster
MAInTAINER lunovill

RUN apt-get update
RUN apt-get install -y nginx
RUN apt-get install openssl
RUN apt-get install -y php7.3 php7.3-fpm php7.3-mysql php7.3-xml
RUN apt-get install -y mariadb-server mariadb-client
RUN apt-get install -y php-mbstring php-zip php-gd wget
RUN wget https://files.phpmyadmin.net/phpMyAdmin/5.1.0/phpMyAdmin-5.1.0-all-languages.tar.gz
RUN wget https://wordpress.org/latest.tar.gz

COPY srcs/localhost ./
COPY srcs/wp-config.php ./
COPY srcs/setting.sh ./

CMD bash /setting.sh

EXPOSE 80
EXPOSE 443
