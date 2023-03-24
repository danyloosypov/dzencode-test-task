## In order to run the project:

1. Download zip and extract it to your server.
2. Open terminal and run "composer update".
3. Rename .env.example file to .env.
4. run php artisan key:generate
5. Set database name in .env file and create a database with the same name in phpmyadmin
6. Migrate using php artisan migrate
7. Run your server
