<p>All the underbelow, it bases on you have learnt "https://github.com/ramseyjiang/Facade_Pattern_Laravel_Passport_Vue_Fullstack/tree/Facade_pattern_Laravel_Passport_vue_fullstack" before.</p>

<p>If want to learn how to do this project step by step, please follow all the under below.</p>

<p>Step1: composer require jenssegers/mongodb </p>

<p>Add MongoDB config into .env, .env.example, config/database.php </p>

<p>Step2: php artisan make:controller BlogController --resource (It will generate BlogController and some default methods)</p>

<p>Step3: php artisan make:request BlogRequest (It will generate BlogRequest in a requests folder)</p>

<p>Step4: php artisan make:model Models/Log -m (It will generate Log.php within the Models folder and generate a new file in the database/migrations folder, you should fill the table content.)</p>

<p>Step5: php artisan make:model Models/Blog (It will generate a Blog model within the Models folder.)</p>

<p>Step6: php artisan make:policy BlogPolicy (It will generate a BlogPolicy file in the policies folder.)</p>

<p>Step16: php artisan make:observer BlogObserver (It will generate a BlogObserver file in the Observers folder)</p>

<p>Step17: php artisan make:test BlogTest (It will generate a BlogTest file in the tests/Feature folder.)</p>

<p>Step18: create Blog/List.vue, Blog/Edit.vue in the resources/js/components folder, create Blog/List.test.js, Blog/Edit.test.js in the resources/js/tests folder</p>

<p>Step19: Update routes.js</p>

<p>After all steps above, you can copy code from each matches file content from this project file.</p>
<p>Run "npm run dev" to compile, after that run "npm run test" to test whether frontend works or not. </p>
<p>If all the above works, this project works. Thanks for your time. If you like this project, please add a star for me. Thanks and cheers.</p>
