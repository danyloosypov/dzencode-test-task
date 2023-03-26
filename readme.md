## Description

This project allows user to register and write comments or reply to other comments. To register user has to enter captcha.
On the comment page user can upload txt|pdf|png|jpg files. If user uploads image with a resolution higher than 320x240, the program decreases its resolution. When a user hovers any image it gets outlined. User can see the uploaded txt and pdf files. There is paging (25 comments per page). Default comments sorting is LIFO. 

## In order to run the project:

1. Download zip and extract it to your server.
2. Open terminal and run "composer update".
3. Rename .env.example file to .env.
4. run php artisan key:generate
5. Set database name in .env file and create a database with the same name in phpmyadmin
6. Migrate using php artisan migrate
7. Run your server
