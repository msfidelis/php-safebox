#!/bin/bash

sudo apt-get update ; sudo apt-get install php5 libapache2-mod-php5 php5-cgi php5-cli php5-common php5-curl php5-dbg php5-dev php5-gd php5-gmp php5-json php5-ldap php5-odbc php5-pgsql php5-mysql php5-xmlrpc php5-xsl php5-enchant php5-intl libphp-jpgraph php-codesniffer php-doc php-http-request2 php5-adodb php5-imagick php5-imap php5-mcrypt php5-memcache php5-memcached php5-mongo php5-oauth phpunit php5-geoip php5-xdebug php5-exactimage php-pear devscripts debget apache2 mysql-server 

sudo a2enmod rewrite
sudo service apache2 restart

