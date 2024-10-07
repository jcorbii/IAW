# Instalar Apache
sudo apt update
sudo apt install apache2

# 1. Habilitar el servicio de Apache
sudo systemctl enable apache2q

# 2. Reiniciar el servicio de Apache
sudo systemctl restart apache2

# 3. Configurar el servicio de Apache para que use el puerto 80
sudo nano /etc/apache2/ports.conf

# 4. Habilitar el puerto 80 en el firewall
sudo ufw allow in "Apache"

# 5. Instalar MySQL
sudo apt install mysql-server

# 6. Habilitar el servicio de MySQL
sudo systemctl enable mysql

# 7. Securisar el servicio de MySQL
sudo mysql_secure_installation

# Instalamos PHP y el módulo de Apache para PHP
sudo apt install php libapache2-mod-php php-mysql -y

# Reiniciamos Apache para cargar PHP
systemctl restart apache2

