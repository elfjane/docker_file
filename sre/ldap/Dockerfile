FROM alpine:3.21.3

RUN apk add openldap openldap-clients openldap-back-mdb ca-certificates
RUN install -m 755 -o ldap -g ldap -d /etc/openldap/slapd.d
RUN mkdir -p /etc/conf.d
RUN echo "cfgdir=\"/etc/openldap/slapd.d\"" > /etc/conf.d/slapd
RUN rm /etc/openldap/slapd.conf
COPY ./slapd.ldif /etc/openldap/slapd.ldif
RUN slapadd -n 0 -F /etc/openldap/slapd.d -l /etc/openldap/slapd.ldif

#COPY ./slapd.conf /etc/openldap/slapd.conf
#RUN chown -R ldap:ldap /etc/openldap/slapd.d/*

#COPY ./entrypoint.sh /entrypoint.sh
#COPY ./slapd.conf /etc/openldap/slapd.conf
#RUN chmod +x entrypoint.sh

#COPY ./elfjane.ldif /etc/openldap/schema/elfjane.ldif

#ENTRYPOINT ["/entrypoint.sh"]
WORKDIR /etc/openldap
CMD ["slapd", "-d", "1"]
