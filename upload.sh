#!/bin/sh

#GMO VPSへのデータコピー

rsync -av --delete --chmod=Dg+rwx,Do+rx,Fa+rw,Fa-x --exclude-from=exclude_upload.txt -e "ssh -i /home/peke2/.ssh/ssh_nopass_key" json_response peke2@211.125.90.40:/var/www/test
