#!/bin/bash

# Start Nagios
/usr/local/nagios/bin/nagios -d /usr/local/nagios/etc/nagios.cfg &

# Start Apache in the foreground
apachectl -D FOREGROUND
