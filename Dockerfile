# **************************************************************************** #
#                                                                              #
#                                                         :::      ::::::::    #
#    Dockerfile                                         :+:      :+:    :+:    #
#                                                     +:+ +:+         +:+      #
#    By: abettach <abettach@student.42.fr>          +#+  +:+       +#+         #
#                                                 +#+#+#+#+#+   +#+            #
#    Created: 2020/11/07 16:45:45 by abettach          #+#    #+#              #
#    Updated: 2020/11/07 16:57:31 by abettach         ###   ########.fr        #
#                                                                              #
# **************************************************************************** #

FROM debian:buster

RUN apt-get update && apt-get install nginx -y
RUN apt-get install mariadb-server mariadb-client -y
RUN apt-get install php-fpm php-mysql -y
RUN apt-get install vim wget -y
RUN apt-get install -y php-mbstring php-zip php-gd php-xml php-pear php-gettext php-cli php-fpm php-cgi php-mysql -y
RUN mkdir /src

COPY /srcs/default /etc/nginx/sites-available/
COPY /srcs/dbuser.sql /src
COPY /srcs/createdb.sql /src
COPY /srcs/localhost.sql /src
COPY /srcs/wp-config.php /src
COPY /srcs/config.inc.php /src/
COPY /srcs/dbuser.sql /src
COPY /srcs/createdb.sql /src
COPY /srcs/localhost.sql /src
COPY /srcs/wp-config.php /src
COPY /srcs/start.sh /src

EXPOSE 80 443

CMD bash /src/start.sh