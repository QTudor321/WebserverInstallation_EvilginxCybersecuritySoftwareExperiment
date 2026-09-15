# WebserverInstallation_EvilginxCybersecuritySoftwareExperiment
This project is a documentation of a Cybersecurity experiment involving the Evilginx 2 software. The experiment represents misleading the victim from an original website to a proxy phising website using the Evilginx 2 software in order to analyze a cybersecurity attack.
Project content: gallery folder with all the steps taken in image format, my own webpages implementation folder in PHP, Evilginx phishlets structure explanations document and the custom phishlet created by me.
This project demonstrated system and network administration capabilities, because an entire webserver has been installed and configured manually with no external frameworks.
The repository contains a gallery of images which display the installation of the software, full setup of a once public then archived webserver, configuration of the network and operating system and the cybersecurity experiment. I do not condone or influence other viewers and members of this community to replicate the experiments shown, this is a purely informative report of a cybersecurity experiment.
Phishing is a cyber attack that uses social engineering tactics to gain access to a victim's sensitive information. Attackers use email, phone calls, or text messages disguised as a legitimate entity to extract information from victims through blackmail. Social engineering refers to human errors in technology design. In other words, it's a scam in the modern era. When attackers can't penetrate systems, they focus on getting sensitive information from key people and disguising themselves as a legitimate entity to gain access.
Evilginx is a man-in-the-middle cyber attack framework used to extract a victim's login information along with website cookie sessions, allowing the attacker to bypass two-factor authentication protection. The tool uses a customized version of the HTTP nginx server that provides man-in-the-middle functionality and acts as a proxy server between the browser and the target website. The final version is entirely written in Golang as an application, implementing its own HTTP and DNS server, with an easy initial setup and configuration. This program can be used for malicious purposes, but it was created for demonstrations and experiments that contribute to the improvement of computer system security.

<img width="1451" height="374" alt="Terminal3" src="https://github.com/user-attachments/assets/0142f46a-7e58-4912-a084-dfed7ebf3d79" />

Evilginx Installation:
- Cloning Evilginx 2 repository into local machine
- Creating Evilginx 2 software executable by running the Batch script
- Installing the Evilginx certificate to grant access to local machine
- Creating a custom phishlet used for the target website

Tools, technologies and platforms used: Evilginx 3 software, Digital Ocean as the webserver host on an Ubuntu machine, Cloudflare DNS for DNS configuration, Namecheap for domain name, Windows Firewall, 
Windows CMD, Apache 2 Linux, Certbot Linux, MySQL database configuration using apache2, Microsoft Edge browser, Cookie Editor extension for Microsoft Edge, PHP language to implement the website body.
Various tools used: ssh, scp, nano, vim, certbot, ufw, systemctl, chown, chmod, mysql, cat
The environment of the entire project happens on 2 machines: the Ubuntu Digital Ocean machine for the webservers host and the local personal Windows 11 machine where the experiment took place.

Webserver Installation:
- Signing up on Digital Ocean, buying a host droplet, choosing a Region, authentication way and naming the host webserver
- Creating the droplet
- Opening the droplet Ubuntu console
- Installing apache 2 server, database mysql plugin for apache2, certbot tool to generate a private and public key
- Transfering the PHP website files from local machine to the Ubuntu webserver machine using the SCP tool
- Creating, configuring and enabling the MySQL database for the webserver
- Granting access to all the website files with .php extension
- Issuing certbot certificate for the apach2 webserver using certbot tool which expires in 4 months
- Editing Ubuntu configuration files: configpage.php (custom website configuration page), laboratorysec.xyz.conf (located in /etc/apache2/sites-available Ubuntu directory, webserver configuration file)
- Verifying everything and using ,,systemctl" to determine webserver status

Local machine configurations:
- Transfering the PHP website files to the Ubuntu machine using the ,,scp" tool
- Installing the Evilginx certificate to grant access to local machine
- Editing Windows Firewall inbound rules to allow the connection on the specified port to evilginx.exe
- Buying the DNS domain from Cloudflare and adding a record to the webservers IP address
- Buying a domain name from Namecheap ,,xyz"
- Using ,,ssh" tool to connect remotely to the Ubuntu webserver host console and check configuration files
- Using ,,nslookup" to ping and check the webserver
- Listing all available certificates issued by certbot
- Checking the database configuration
- Checking the webserver status
- Checking the HTTP and HTTPS ports (80 and 443 ports)
- Editing the hosts file from the local machine (located in /Windows/System32/drivers/etc) in order to add the phishing website (laboratoryloginx.com) and to be recognized locally by the computer
- Creating the custom phishlet located in /evilginx2/phishlets local folder designed for my own created webserver
- Launching Evilginx 3 and initiating the experiment on Microsoft Edge
- Using the ,,lures get-url 0" Evilginx command to display the captured data
- Copying the captured cookie session and using Cookie Editor to bypass the login system
- The welcome message is displayed and bypassing login to enter login.php

This entire experiment and all these steps were taken by me only on my personal computer. No external online company or platform has been targeted during this experiement, it is isolated.
