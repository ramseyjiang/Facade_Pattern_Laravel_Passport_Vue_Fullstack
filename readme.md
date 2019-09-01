<p>All the underbelow, it bases on you have learnt "https://github.com/ramseyjiang/Facade_Pattern_Laravel_Passport_Vue_Fullstack/tree/add_username_UsersTableSeeder_change_codeStructure" before.</p>

<p>If want to learn how to do this project step by step, please follow all the under below.</p>

<p>php artisan make:request UserLoginRequest</p>
<p>php artisan make:request UserRegisterRequest</p>
<p>Update Models/User.php</p>

<p>mkdir app/Contracts</p>
<p>mkdir app/Contracts/Repositories</p>
<p>mkdir app/Contracts/Services</p>
<p>Create a file named UserRepositoryContract.php in Contracts/Repositories folder</p>
<p>mkdir app/Repositories</p>
<p>Create a file named UserFacadeRepository.php in Repositories folder</p>
<p>Update AppServiceProvider.php in the Providers folder, 
add $this->app->bind(UserRepositoryContract::class, UserFacadeRepository::class); in the register method.</p>
<p>mkdir app/Facades</p>
<p>Create a file named UserRepositoryFacade.php</p>
<p>Add 'UserRepository' => Fspafs\Facades\FacadeUserRepository::class, into aliases array in the config/app.php. </p>

<p>Create a file named UserServiceContract.php in app/Contracts/Services folder</p>
<p>mkdir app/Services</p>
<p>Create a file named UserFacadeService.php in Services folder</p>
<p>Update AppServiceProvider.php in the Providers folder, 
add $this->app->bind(UserServiceContract::class, UserFacadeService::class); in the register method.</p>
<p>Within app/Facades folder, Create a file named UserServiceFacade.php</p>
<p>Add 'UserService' => Fspafs\Facades\UserServiceFacade::class, into aliases array in the config/app.php. </p>

<p>Update app/Controllers/Auth/LoginController.php and app/Controllers/Auth/RegisterController.php</p>

<p>php artisan make:test AuthTest(It is used to create unit tests.)</p>
<p>Update tests/CreatesApplication.php</p>
<p>./vender/bin/phpunit (If no errors, it works fine.)</p>