FROM alissonzam/php5_apache_mysql
MAINTAINER alisson.zampietro@gmail.com
RUN service apache2 start && service mysql start
