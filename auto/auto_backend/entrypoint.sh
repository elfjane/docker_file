#!/usr/bin/env bash
#/export_env.sh
chown elfjane.elfjane /var/www

# change elfjane
sudo -i -u elfjane bash << EOF
echo "In"
whoami
cd /auto
pwd
nohup /auto/web_hook_server.so &
EOF
echo "Out"
whoami

/usr/sbin/sshd -D