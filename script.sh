#after 
php artisan migrate

#comment out boot() function on AppServiceProvider.php

mysql -u root -p busticket_db < ./install/2108install_start.sql 
