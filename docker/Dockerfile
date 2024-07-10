# Import OS CentOS 7
FROM centos:7.9.2009

# Mirrors update
COPY CentOS-Base.repo /etc/yum.repos.d/CentOS-Base.repo

# Install
RUN yum -y update && \
    yum -y install httpd && \
    echo "ServerName localhost" >> /etc/httpd/conf/httpd.conf && \
    yum -y install epel-release && \
    yum -y install https://rpms.remirepo.net/enterprise/remi-release-7.rpm && \
    yum -y install yum-utils && \
    yum-config-manager --enable remi-php74 && \
    yum -y install php php-cli php-mysql php-gd php-mbstring && \
    curl -s https://packagecloud.io/install/repositories/ookla/speedtest-cli/script.rpm.sh | bash && \
    yum -y install speedtest && \
    systemctl enable httpd && \
    yum clean all

# Install compose
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
RUN speedtest --accept-license

# 
WORKDIR /var/www/html

# Expose ports
EXPOSE 80

# Run services
CMD ["/usr/sbin/httpd", "-D", "FOREGROUND"]
