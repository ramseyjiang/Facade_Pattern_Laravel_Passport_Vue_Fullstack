<p>All the underbelow, it bases on you have learnt "https://github.com/ramseyjiang/Facade_Pattern_Laravel_Passport_Vue_Fullstack/tree/base" before.</p>

<p>If want to learn how to do this project step by step, please follow all the under below.</p>

<p>php artisan make:migration add_username_to_users</p>
<p>open .env file, change database, username, password the same with your local.</p>
<p>php artisan migrate (If make a mistake, run "php artisan migrate:rollback")</p>
<p>php artisan app:name Fspafs</p>
<p>php artisan make:model Models/User</p>
<p>delete User.php under Models folder, and then move app/User.php into Models folder. After that, modify User.php namespace</p>
<p>change User namespace in config/auth.php, config/services.php, database/factories/UserFactory.php.</p>
<p>remove comment in the database/seeds/DatabaseSeeder.php</p>
<p>php artisan make:seeder UsersTableSeeder (Add content into it, please find it in the /database/seeds/UsersTableSeeder.php)</p>
<p>php artisan db:seed --class UsersTableSeeder (It will insert UserSeed into db automatically)</p>