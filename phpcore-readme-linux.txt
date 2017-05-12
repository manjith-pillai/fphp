php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
php -r "if (hash_file('SHA384', 'composer-setup.php') === '55d6ead61b29c7bdee5cccfb50076874187bd9f21f65d8991d46ec5cc90518f447387fb9f76ebae1fbbacf329e583e30') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"
php composer-setup.php
php composer.phar install

Create database
Create user
Map user with database

## Installation Process
1. Lets say, hosting directory is public_html/rm/devweb
2. Create a parallel directory as publich_html/rm/phpcore.dev.branch
	This directory will contains all the application source code.
3. Delete devweb directory
4. Create a link as devweb
	Go to rm/
	ln -s phpcore.dev.branch/public devweb
5.  chmod -R o+w phpcore.dev.branch/storage


php artisan migarte

## Composer Install

$ cd /User/petehouston/project/
$ curl -sS https://getcomposer.org/installer | php — –filename=composer
$ php composer install
$ php composer dumpautoload -o
$ php artisan config:cache

## Seed Data to database
# Role and Permissions
php artisan db:seed --class=RolesPerms

# Subscripription Plans seed data
php artisan db:seed --class=Plans

#Default User to database
php artisan db:seed --class=UsersTable

## Configuration changes before launching project

# For Social Integration i.e Facebook & google
1. Change "Callback_url" parameter from 
"http://localhost:8000/social/login/facebook" to "your_url_to_callback/social/login/facebook" for Facebook
and
"http://localhost:8000/social/login/google" to "your_url_to_callback/social/login/google" for Google.

# For Email Verification
2. In AgentsCreated.php and UserCreated.php, Change action_url to your desired url i.e http://rm.dev.web.foundlay.com/verifyuseremail(or verifyagentemail).
