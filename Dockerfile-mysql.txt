FROM mysql/mysql-server:5.7
COPY wp-init.sql /docker-entrypoint-initdb.d/