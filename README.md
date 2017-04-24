WORKPLACE
========================

Application de gestion de temps.

Guide d'installation
--------------

Commandes à executer dans le terminal :  
cd /Applications/MAMP/htdocs  
git clone https://github.com/Mgruchet/Workplace.git  
cd Workplace/ 

Corriger permissions :  
rm -rf var/cache/*  
rm -rf var/logs/*  
HTTPDUSER=`ps axo user,comm | grep -E '[a]pache|[h]ttpd|[_]www|[w]ww-data|[n]ginx' | grep -v root | head -1 | cut -d\  -f1`  
sudo chmod -R +a "$HTTPDUSER allow delete,write,append,file_inherit,directory_inherit" var  
sudo chmod -R +a "`whoami` allow delete,write,append,file_inherit,directory_inherit" var  

Installation de Composer :  
php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"  
php -r "if (hash_file('SHA384', 'composer-setup.php') === '669656bab3166a7aff8a7506b8cb2d1c292f042046c5a994c43155c0be6190fa0355160742ab2e1c88d40d5be660b410') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"  
php composer-setup.php  
php -r "unlink('composer-setup.php');"  

Installation des dépendances :  
php composer.phar install

Générer la base de données :  
php bin/console doctrine:database:create  
php bin/console doctrine:schema:create

Insertion des données :  
php bin/console doctrine:fixtures:load

Annuler les modification sur le bundle FOSUserBundle :  
git checkout vendor/friendsofsymfony/