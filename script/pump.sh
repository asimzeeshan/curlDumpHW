#!/usr/bin/env bash
# ^^ WORKAROUND FOR DIFFERNT LINUX SYSTEMS

sudo apt-get -q -y install lshw curl
# ^^ I KNOW I can fuckin' use "apt" instead of "apt-get" but I have no clue which system would this be run on
# so just to ensure backward compatibility, old syntax has been used

#DATE=`date +%Y-%m-%d`
DATE=`date '+%Y-%m-%d_%H-%M-%S'`
DATA=`sudo lshw -short`

# POST THE FUCKIN DATA
# PAY ATTENTION - PAY ATTENTION - PAY ATTENTION - PAY ATTENTION - PAY ATTENTION
# DID I MENTION PAY VERY CLOSE ATTENTION?
# PAY ATTENTION - PAY ATTENTION - PAY ATTENTION - PAY ATTENTION - PAY ATTENTION
# UPDATE http://localhost:3000 to whatever host you wish it to be
curl --request POST 'http://159.69.191.84:3000/index.php' --data "scriptpath=$PWD&hostname=$HOSTNAME&dumpdate=$DATE&rawdata=$DATA"
