//STEP 1
clone the repo https://github.com/revelucide/LARAVEL-12-API-NEXT-JS-FRONTEND

//STEP 2 // CONFIGURE BACKEND
create MySQL Database
run: cp .env.example .env

modify .env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=*Your Database*
DB_USERNAME=root
DB_PASSWORD=
   
php artisan key:generate
php artisan migrate
composer require laravel/sanctum 
php artisan vendor:publish --provider="Laravel\Sanctum\SanctumServiceProvider"
php artisan serve


// STEP 3 // CONFIGURE FRONTEND 

npm install
cp .env.local.example .env.local
NEXT_PUBLIC_API_URL=http://localhost:8000
NEXT_PUBLIC_APP_URL=http://localhost:3000
npm run dev


$request->validate([
    'firstName' => 'required|string|max:255',
    'middleName' => 'required|string|max:255',
    'lastName' => 'required|string|max:255',
    'suffix' => 'required|string|max:10',
    'email' => 'required|string|email|max:255|unique:users',
    'password' => 'required|string|min:8|confirmed',
]);

