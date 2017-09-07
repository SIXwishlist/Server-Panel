# Server-Panel
This File Contains all important informations

Version: 0.01
Lang: PHP
Tested on : Windows X

## Wanted Funktions:
Network:
 DHCP konfiguration
 DNS konfiguration
 IP konfiguration

(DHCP-Server) <- better leave it to Firewall/Router?
	

DNS-Server:
	Zone Configuration

Gameserver:
 (With Docker?)
 GameList:
  
 Functions:
  Terminal
  Config
  Autoshutdown after X Minutes
  Autostart wenn user wants to connect

Voiceserver:
 TeamSpeak 3
 Mumble
 (Ventrilo)

Cloud:
 NextCloud

Webserver:
 Nginx
  Configurable for Multiple Users/(Sub-)Domains
  
Certificate:
	Let's Encrypt
	
VPN:
 Tinc(Meshed) (LAN over Internet)
 OpenVPN (Secure internet connection)
 
## Available Functions:
Live Terminal
Few Systeminformation



## How it works
The Server Panel indentify which operating system is installed.
So it use differend functions to read out system data

For an example Linux us the /proc/data file to store all 
system data, Windows use a small powershell script to find
out which system data is available

This data should be changable with simple PHP or Shell files.

