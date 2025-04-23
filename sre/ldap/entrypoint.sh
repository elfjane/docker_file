#!/bin/sh
slapd -d 1 & sleep 5

ldapadd -x -D "cn=admin,dc=elfjane,dc=com" -w admin -f /etc/openldap/schema/elfjane.ldif

exec "$@"
