# Final Project

To run the FAQ Project:

1. git clone https://github.com/RavaliKatta/miniproject3.git
2. CD into miniproject3 and run composer install
3. copy .env.example to .env
4. setup database / with sqlite (https://laravel.com/docs/5.6/database)
5. Run: php artisan migrate
6. Run: unit tests: phpunit
7. Run: seeds php artisan migrate:refresh --seed

Front end can be viewed by going to the FAQ app using the link: " http://is601miniproject3.herokuapp.com/"


Epic 1: Implementing end to end Unit testing using Laravel Dusk.
 As a User/Developer of project I want to Run Dusk tests so that I can validate the correctness of my program/application.
 
 **Installation**
1. You can install the package via composer:

   "composer require --dev laravel/dusk"
2. After installing the Dusk package, run the Artisan command:   

   "php artisan dusk:install"
   
3. Once Dusk is installed, you need to register the Laravel\Dusk\DuskServiceProvider service provider. You should do this within the register method of your AppServiceProvider in order to limit the environments in which Dusk is available, since it exposes the ability to login as other users:
   
    {
       $this->app->register(DuskServiceProvider::class);
    }   
   
4. To generate a Dusk test, use the dusk:make Artisan command. The generated test will be placed in the tests/Browser directory:
   
   "php artisan dusk:make LoginTest"   
   
5. To run your tests, use the dusk Artisan command. The dusk command accepts any argument that is also accepted by the phpunit command:

   "php artisan dusk"  
   
6. If you had test failures the last time you ran the dusk command, you may save time by re-running the failing tests first using the dusk:fails command:
   
   "php artisan dusk:fails"  
   
   **License**
   
   Laravel Dusk is open-sourced software licensed under the MIT license
   
   I have written 11 dusk tests with 51 assertions. All of them are working fine without failures. I have commited the code. These tests can be found in my github repository and working Perfectly. I have sent the Screenshots of my dusk tests to the Professor.
   
      

