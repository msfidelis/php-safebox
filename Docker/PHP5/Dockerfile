#IMAGEM DEFAULT DO APACHE CLOUD
FROM ubuntu:15.04
MAINTAINER Matheus Fidelis <msfidelis01@gmail.com>

RUN apt-get update ; apt-get upgrade -y; apt-get install php5 libapache2-mod-php5 php5-cgi php5-cli php5-common php5-curl php5-dbg php5-dev php5-gd php5-gmp php5-json php5-ldap php5-odbc php5-pgsql php5-mysql php5-xmlrpc php5-xsl php5-enchant php5-intl libphp-jpgraph php-codesniffer php-doc php-http-request2 php5-adodb php5-imagick php5-imap php5-mcrypt php5-memcache php5-memcached php5-mongo php5-oauth phpunit php5-geoip php5-xdebug php5-exactimage php-pear php5-fpm php5-mysql php5-intl php5-xdebug devscripts debget apache2 -y

RUN apt-get autoclean && apt-get clean
RUN rm -r /var/www/html/*
ADD ../../app/ /var/www/html/

#SETANDO AS VARIÁVEIS DE AMBIENTE
RUN a2enmod rewrite
ENV APACHE_RUN_USER www-data
ENV APACHE_RUN_GROUP www-data
ENV APACHE_LOG_DIR /var/log/apache2
ENV APACHE_LOCK_DIR /var/lock/apache2
ENV APACHE_PID_FILE /var/run/apache2.pid

EXPOSE 80 

#COMANDO QUE A IMAGEM IRÁ EXECUTAR DURANTE A INICIALIZAÇÃO
CMD ["/usr/sbin/apache2", "-D", "FOREGROUND"]

