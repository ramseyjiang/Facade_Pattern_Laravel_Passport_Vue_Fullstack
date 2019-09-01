<p>All the underbelow, it bases on you have learnt "https://github.com/ramseyjiang/Facade_Pattern_Laravel_Passport_Vue_Fullstack/tree/Facade_pattern_auth_and_auth_unittest" before.</p>

<p>If want to learn how to do this project step by step, please follow all the under below.</p>

<p>composer require laravel/passport</p>
<p>php artisan migrate</p>
<p>php artisan passport:install</p>
<p>Follow the link https://laravel.com/docs/5.8/passport#introduction, you should update config/auth.php, app/Models/User.php, app/Providers/AuthServiceProvider.php</p>
<p>php artisan make:controller Api/UserController</p>
<p>php artisan make:test Api/UserTest</p>
<p>update routes/Api.php</p>
<p>Update tests/CreatesApplication.php</p>
<p>./vendor/bin/phpunit (It is used to run php unittests)</p>
<p>If unittests run no issues, it is fine.</p>
