FROM ubuntu:22.04

COPY ./nagios-3.3.1.tar.gz /opt/nagios-3.3.1.tar.gz
#COPY ./nagios-plugins-1.4.15.tar.gz /opt/nagios-plugins-1.4.15.tar.gz
COPY ./nagios-plugins-1.5.tar.gz /opt/nagios-plugins-1.5.tar.gz

RUN apt-get update
RUN apt-get -y install apache2
RUN a2enmod cgi
RUN DEBIAN_FRONTEND=noninteractive apt-get -y install php php-gd
RUN apt-get -y install build-essential perl libperl-dev libgd-dev libiconv-hook-dev libbsd-dev libltdl-dev
RUN DEBIAN_FRONTEND=noninteractive apt-get install -y sendemail mailutils

# 設定工作目錄
WORKDIR /opt

RUN tar -xzvf nagios-3.3.1.tar.gz
#RUN tar -xzvf nagios-plugins-1.4.15.tar.gz
# https://www.monitoring-plugins.org/download/archive/
RUN tar -xzvf nagios-plugins-1.5.tar.gz
RUN adduser --system --disabled-login --group nagios && \
    groupadd nagcmd && \
    usermod -G nagcmd nagios && \
    usermod -a -G nagcmd www-data

WORKDIR /opt/nagios


RUN ./configure --with-command-group=nagcmd --enable-embedded-perl --with-httpd-conf=/etc/apache2/sites-available

RUN sed -i 's/for file in includes\/rss\/\*;/for file in includes\/rss\/\*\.\*\;/g' ./html/Makefile
RUN make all && \
    make install && \
    make install-init && \
    make install-config && \
    make install-commandmode

ARG NAGIOS_EMAIL
ARG NAGIOS_PASSWORD
ARG NAGIOS_ACCOUNT
ENV NAGIOS_EMAIL=${NAGIOS_EMAIL}
ENV NAGIOS_PASSWORD=${NAGIOS_PASSWORD}
ENV NAGIOS_ACCOUNT=${NAGIOS_ACCOUNT}

RUN sed -i "s/nagios@localhost/${NAGIOS_EMAIL}/g" /usr/local/nagios/etc/objects/contacts.cfg && \
    make install-webconf
RUN cd /etc/apache2/sites-enabled/ && ln -s ../sites-available/nagios.conf

WORKDIR /opt/nagios-plugins-1.5
RUN htpasswd -bc /usr/local/nagios/etc/htpasswd.users ${NAGIOS_ACCOUNT} ${NAGIOS_PASSWORD}
RUN ./configure --with-nagios-user=nagios --with-nagios-group=nagios &&  \
    make && \
    make install
    
RUN /usr/local/nagios/bin/nagios -v /usr/local/nagios/etc/nagios.cfg && \
    /usr/local/nagios/bin/nagios -d /usr/local/nagios/etc/nagios.cfg && \
    /usr/sbin/update-rc.d -f nagios defaults && \
    ln -s /etc/init.d/nagios /etc/rcS.d/S99nagios

WORKDIR /
# /usr/local/nagios/bin/nagios -d /usr/local/nagios/etc/nagios.cfg
# Copy the custom start script into the container
COPY ./start.sh /usr/local/bin/start.sh

# Make sure it's executable
RUN chmod +x /usr/local/bin/start.sh

# Run both Nagios and Apache in the foreground
CMD ["/usr/local/bin/start.sh"]

#CMD ["apachectl", "-D", "FOREGROUND"]

