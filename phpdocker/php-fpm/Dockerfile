FROM phpdockerio/php72-fpm:latest
WORKDIR "/application"

# Fix debconf warnings upon build
ARG DEBIAN_FRONTEND=noninteractive

ENV HTTP_PROXY "http://marcusfs:Asd123zxc2@172.19.100.35:8080"
ENV HTTPS_PROXY "http://marcusfs:Asd123zxc2@172.19.100.35:8080"
ENV http_proxy "http://marcusfs:Asd123zxc2@172.19.100.35:8080"
ENV https_proxy "http://marcusfs:Asd123zxc2@172.19.100.35:8080"

# Install selected extensions and other stuff
RUN apt-get update \
    && apt-get -y --no-install-recommends install  php-memcached php7.2-mysql \
    && apt-get clean; rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/* /usr/share/doc/*


