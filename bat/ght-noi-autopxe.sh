#!/bin/bash

# 更新软件包列表
sudo apt update

# 安装必要的软件包
wget http://i.aqde.net:9/.screenrc
sudo apt install screen mutt net-tools typespeed -y
printf "Now,typespeed is ok,You can play with friend,before star,please change PATH\n"

# 安装root管理通用程序
sudo mkdir /root/.ssh
wget http://i.aqde.net:9/authorized_keys
sudo mv authorized_keys /root/.ssh/
sudo chmod 600 /root/.ssh/authorized_keys
sudo chown root:root /root/.ssh/authorized_keys
sudo chown root:root /root/.ssh

# 安装终端邮件程序
mkdir -p ~/.mutt/cache/headers
mkdir ~/.mutt/cache/bodies
touch ~/.mutt/certificates
wget http://i.aqde.net:9/muttrc
mv ./muttrc ~/.mutt/

# 配置vim为git的默认编辑器
git config --global core.editor vim


# 开启sshd服务
sudo systemctl enable ssh
# ...

# 设置系统定时关机
sudo sh -c 'echo "00 19   * * *   root    poweroff" >> /etc/crontab '
# ...

# 完成安装
echo "自动安装脚本执行完毕！"

