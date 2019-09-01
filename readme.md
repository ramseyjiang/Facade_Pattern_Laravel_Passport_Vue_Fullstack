<p>composer create-project --prefer-dist laravel/laravel project_name "5.8.*"</p>
<p>composer require laravel/telescope</p>
<p>php artisan telescope:install</p>
<p>php artisan make:auth</p>
<p>php artisan migrate</p>
<p>composer require barryvdh/laravel-debugbar --dev</p>
<p>composer require barryvdh/laravel-ide-helper --dev</p>     
<p>composer require xethron/migrations-generator --dev</p>
<p>composer require mpociot/laravel-test-factory-helper --dev</p>
<p>composer require skyronic/laravel-file-generator --dev</p>
<p>add the following code into phpunit.xml, \<\env name="TELESCOPE_ENABLED" value="false"\/\>, remember to remove '\' between '<' and 'env'</p>
<p>command "./vendor/bin/phpunit" can be run.</p>