# AZService Web Application

- Clone Project atau download zip.
- Install composer dependencies (composer install).
- Install bower dependencies (bower install).
- Buat database dengan nama azservice.
- Migrate database (php artisan migrate).


Disable auto login after Register.
- Edit file RegisterUsers.php (vendor/laravel/framework/src/Illuminate/Foundation/Auth/RegisterUsers.php).
- Command atau hapus baris $this->guard()->login($user);
