# Server-Panel
This File Contains all important informations

Version: 0.01
Lang: PHP, Shell, 
Tested on : Windows X
Done: 
Now Developing: (d)
In work: (x)

## Wanted Functions:
	Installer:
		As easy as possible

	General:
		Security (Secure everything)
		Modularity (Only use what you want, Modules dont need each other)

	Network:
		DHCP konfiguration
		DNS konfiguration
		IP konfiguration
		(d)	Show Used Ports and which Application it uses

	DHCP-Server Modul:
	
	
	DNS-Server Modul:
		Zone Configuration

	Gameserver Modul:
		(With Docker?)
		(With LGSM?)
		GameList:
		
		Functions:
			Terminal
			Config (in one .ini file)
			Autoshutdown after X Minutes
			Autostart wenn user wants to connect
			(S)FTP(S) for Mods

	Voiceserver Modul:
		TeamSpeak 3
		Mumble
		(Ventrilo)

	Cloud:
		NextCloud

	Webserver Modul:
		Nginx
			Configurable for Multiple Users/(Sub-)Domains
		PHP
		FTPS or SFTP (Don't remember which of those was secure)

	Certificate:
		Let's Encrypt

	VPN Modul:
		OpenVPN (Secure internet connection)
		(Tinc(Meshed) (LAN over Internet)) <- Does a Server need that?/Do we want that a server has it?

## Available Functions:
	Live Terminal
	Few Systeminformation



## How it works
The Server Panel indentify which operating system is installed.
So it uses different functions to read out system data

For an example Linux uses the /proc/data file to store all 
system data, Windows uses a small powershell script to find
out which system data is available

This data should be changeable with simple PHP or Shell files.

