#Copy the source file server to local machine
git clone https://<host name>/PHPcore.b.1.0.git PHPCore

cd PHPCore

#Composer install is needed for new setup
#One Time Setup for new application
composer install

#??
#One Time Setup for new application
composer update

#??
copy .env.example to .env

#Create Database: update your database details in .env file
#set DB_CONNECTION
#set DB_DATABASE
#set DB_USERNAME
#set DB_PASSWORD

#For SQLLite 
#Note: This is not needed for Base framework
# touch database/database.sqlite


#Key generation
#One Time Setup for new application
php artisan key:generate

#ConfigCache Clear for existing application
#TBD

#Remove config.php in bootstrap/cache

#Clear the cache
php artisan cache:clear

#Execute migration to setup the project
#For new application
php artisan migrate
#For existing application
php artisan migrate:refresh

#Setup seed data like Admin account etc
php artisan db:seed --class=RolesPerms          // For Roles and Permissions
php artisan db:seed --class=Plans               // For Subscription Plans
php artisan db:seed --class=UsersTable			// For Default Users

#Additional commands for Notificatoin model setup - REDIS
npm install --global gulp
npm install gulp



#.env for email configuration
#verify npm dependency

#test the project
phpunit

#clear Application cache
php artisan cache:clear

#clear laravel.log(log file)
php artisan log:clear

#run the project
php artisan serve

#Experience http://localhost:8000
#All the very best