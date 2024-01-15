#!/bin/bash

mv /mnt/aqde/chat.dat /mnt/aqde/tqq/$(date +%Y%m%d)_chat.dat

cp /root/chat.dat /mnt/aqde

cd /mnt/aqde

git add .

git commit -m "Auto-commit with autobak from noi2"

git push
