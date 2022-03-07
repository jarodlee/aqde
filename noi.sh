sudo vim /etc/default/grub
sudo update-grub
timedatectl set-local-rtc 1 --adjust-system-clock
sudo systemctl enable ssh
wget https://gist.githubusercontent.com/jarodlee/75dfcb88111e4f5e9accc8e813d1ce0a/raw/89121fd0aebd58dba2c97cbe62f51476104144f4/.screenrc

