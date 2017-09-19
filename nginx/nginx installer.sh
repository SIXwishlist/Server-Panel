sudo apt-get install nginx curl php php-fpm php-cgi -y
sudo ufw allow 'Nginx HTTPS' #only allow HTTPS
sudo systemctl status nginx