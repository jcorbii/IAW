#!/bin/bash

# Actualizar paquetes y repositorios
sudo apt update -y

# Instalar Apache
sudo apt install apache2 -y

# Instalar MySQL
sudo apt install mysql-server -y

# Instalar PHP
sudo apt install php libapache2-mod-php php-mysql -y

# Reiniciar Apache para que cargue PHP
sudo systemctl restart apache2

# Mensaje de finalización
echo "LAMP instalado correctamente"


