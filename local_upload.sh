#!/bin/sh

#ローカルサーバーへのアップロード

rsync -av --delete --chmod=Dg+rwx,Do+rx,Fa+rw,Fa-x --exclude-from=exclude_upload.txt -e "ssh -i /home/peke2/.ssh/ssh_nopass_key" json_response 192.168.56.104:/var/www/peke2/test
