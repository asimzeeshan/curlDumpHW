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

## What the fuck is really it recording/capturing?

Something like this

    H/W path       Device           Class          Description
    ==========================================================
                                    system         HP ENVY x360 m6 Convertible (W2K45UAR#ABA)
    /0                              bus            81AD
    /0/0                            memory         128KiB BIOS
    /0/4                            processor      Intel(R) Core(TM) i5-7200U CPU @ 2.50GHz
    /0/4/5                          memory         128KiB L1 cache
    /0/4/6                          memory         512KiB L2 cache
    /0/4/7                          memory         3MiB L3 cache
    /0/26                           memory         16GiB System Memory
    /0/26/0                         memory         8GiB SODIMM DDR4 Synchronous 2133 MHz (0.5 ns)
    /0/26/1                         memory         8GiB SODIMM DDR4 Synchronous 2133 MHz (0.5 ns)
    /0/100                          bridge         Intel Corporation
    /0/100/2                        display        Intel Corporation
    /0/100/4                        generic        Skylake Processor Thermal Subsystem
    /0/100/13                       generic        Intel Corporation
    /0/100/14                       bus            Sunrise Point-LP USB 3.0 xHCI Controller
    /0/100/14/0    usb1             bus            xHCI Host Controller
    /0/100/14/0/1                   input          USB Device
    /0/100/14/0/4                   multimedia     HP Wide Vision HD
    /0/100/14/0/6                   communication  Bluetooth wireless interface
    /0/100/14/1    usb2             bus            xHCI Host Controller
    /0/100/14.2                     generic        Sunrise Point-LP Thermal subsystem
    /0/100/15                       generic        Sunrise Point-LP Serial IO I2C Controller #0
    /0/100/15.1                     generic        Sunrise Point-LP Serial IO I2C Controller #1
    /0/100/16                       communication  Sunrise Point-LP CSME HECI #1
    /0/100/17                       storage        Sunrise Point-LP SATA Controller [AHCI mode]
    /0/100/1c                       bridge         Intel Corporation
    /0/100/1c/0    wlo1             network        Wireless 7265
    /0/100/1d                       bridge         Sunrise Point-LP PCI Express Root Port #9
    /0/100/1d/0                     generic        RTS522A PCI Express Card Reader
    /0/100/1f                       bridge         Intel Corporation
    /0/100/1f.2                     memory         Memory controller
    /0/100/1f.3                     multimedia     Intel Corporation
    /0/100/1f.4                     bus            Sunrise Point-LP SMBus
    /0/1           scsi2            storage        
    /0/1/0.0.0     /dev/sda         disk           500GB Samsung SSD 850
    /0/1/0.0.0/1   /dev/sda1        volume         511MiB Windows FAT volume
    /0/1/0.0.0/2   /dev/sda2        volume         244MiB EFI partition
    /0/1/0.0.0/3   /dev/sda3        volume         465GiB EFI partition
    /1                              power          MB04055XL
    /2                              power          OEM Define 5
    /3             br-ca0df7b87c26  network        Ethernet interface
    /4             br-6cfd2f05b4ed  network        Ethernet interface
    /5             br-80c2204e4745  network        Ethernet interface
    /6             br-07b36868f9b1  network        Ethernet interface
    /7             veth75f56a2      network        Ethernet interface
    /8             veth8483ab9      network        Ethernet interface
    /9             veth88acec7      network        Ethernet interface
    /a             br-c41f5053d89a  network        Ethernet interface
    /b             docker0          network        Ethernet interface

## OK, so you have a docker service, haha, how will one collect data?
push the script `script/pump_n_dump.sh` via ansible to your hosts AND it will post the data to this docker-service

# IGNORE THE PROFANITY IN THE CODE
