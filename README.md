# Server-Panel
This File Contains all important informations

Version 1.0
Lang: PHP
Tested on : Windows


## Wanted Funktions:
 DHCP konfiguration
 DNS konfiguration
 Zone konfiguration
 IP konfiguration

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


