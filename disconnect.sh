#bin/bash/
ssh root@192.168.100.4 "echo "User-Name=100,Framed-IP-Address=10.10.6.172" | radclient -x 192.168.100.1:3799 disconnect testing123"
