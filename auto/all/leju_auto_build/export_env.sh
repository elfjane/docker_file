#!/bin/bash
BASHRC=/home/elfjane/.bashrc
BASHRC_BAK=/home/elfjane/.bashrc.bak

# 檢查檔案如果存在就不進行新增 env

cp $BASHRC_BAK $BASHRC
echo "not export add export"
printf "\n# add export \n" >> $BASHRC

# 取得檔案並清除空白
cat /auto/.env | grep -v '^$' | while read line; do
if echo $line | grep '#' ;then
  echo "pass $line"
else
  echo "export $line" >> $BASHRC
fi
done

