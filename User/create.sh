#Prüft auf root
if [[ $EUID -ne 0 ]]; then
   echo "This script must be run as root" 1>&2
   exit 1
fi


read -p "Passwort für neuen User eingeben: " userpw
adduser panel
usermod -aG sudo panel