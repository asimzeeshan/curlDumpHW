# curlDumpHW
Bash script for debian/ubuntu to collect hardware information and post it to a service (PHP) as docker container

## How to use?
Close the repo and run docker-compose (ensure that its already installed)

    $ git clone https://github.com/asimzeeshan/curlDumpHW.git curldump
    $ cd curldump
    $ docker-compose up -d --build
    $ docker exec -it curlhook_web_1 chmod 775 /var/www/html/dump.log

## How to enter the terminal?
Simple, just run the following command (assuming the container id is curlhook_web_1

    $ docker exec -it curlhook_web_1 bash

## What does it include?
It includes the following
  - PHP (compiled with apache) on debian:stretch-slim
  - MariaDB
  - phpMyAdmin (for maintenance)
  
## What? Where?
  - app/service is at http://your-ip:3000/
  - phpMyAdmin is at http://your-ip:3001/

## I'm having an issue .....
Open an issue and i'll hopefully reply quicker

# IGNORE THE PROFANITY IN THE CODE
