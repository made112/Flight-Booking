//Instruction For Install the project 



git clone https://github.com/made112/Flight-Booking.git


cd Flight-Booking


cp .env.example .env


change this'


DB_DATABASE: The name of your database



DB_USERNAME: Your database username



DB_PASSWORD: Your database password

run composer install

npm install

run php artisan key:generate

php artisan migrate

php artisan db:seed

php artisan serve


//to run the Test environment must 


php artisan test


//make sure the test must empty your data like (users)
