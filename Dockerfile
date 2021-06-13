FROM centos:centos7
USER root
WORKDIR /app
COPY . .
RUN yum install -y epel-release && \
    rpm -Uvh http://rpms.famillecollet.com/enterprise/remi-release-7.rpm && \
    yum install -y --enablerepo=remi,remi-php70 php php-mbstring php-pdo php-gd php-pear php-fpm php-mcrypt php-devel php-xml && \
    sed -i -e 's/;date.timezone =/date.timezone = Asia\/Tokyo/' /etc/php.ini
EXPOSE 8080
CMD ["php", "app/console", "server:run", "--env=prod", "0.0.0.0:8080"]