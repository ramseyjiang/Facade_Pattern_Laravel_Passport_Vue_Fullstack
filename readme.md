<p>All the underbelow, it bases on you have learnt "https://github.com/ramseyjiang/Facade_Pattern_Laravel_Passport_Vue_Fullstack/tree/Facade_pattern_Laravel_passport_for_api" before.</p>

<p>If want to learn how to do this project step by step, please follow all the under below.</p>

<p>Step0: npm install</p>

<p>Step1: npm install --save-dev @babel/cli @babel/preset-env jest @vue/test-utils vue-template-compiler vue-jest axios-mock-adapter vue-router eslint@^5.0.0 eslint-plugin-vue babel-core@^7.0.0-bridge.0  lint-staged husky eslint-config-prettier eslint-plugin-prettier prettier @vue/cli-plugin-eslint@^3.10.0 bootstrap-vue</p>

<p>Step2: create a file named ".babelrc", and copy content from the same file in this project</p>

<p>Step3: create a file named "prettier.config.js", and copy content from the same file in this project</p>

<p>Step4: eslint --init (Follow the "eslint --init" tips and do them step by step.)</p>

<p>Step5: After Step4, it will create a file named .eslintrc.js automatically. This step will copy content from the same file in this project</p>

<p>Step6: Edit webpack.mix.js, copy content from the same file in this project</p>

<p>Step7: Edit .gitignore, copy content from the same file in this project. It will let git know how many files you wanna to ignore.</p>

<p>Step8: Edit package.json. Open the same file in this project. After that, please copy "watchtest", "lint", "test" and "format". You also need to copy config about "jest", "lint-staged" and "husky".</p>

<p>Step9: After above 8 steps. You can run: "npm run test" to check whether test works. You also can run "npm run watchtest" to check whether watchtest works, by the way, "npm run watchtest" is similar as "npm run watch". "npm run lint" is used to check garamar for ES6. "npm run format" is used to format your frontend codes.</p>

<p>Step10: create resources/js/Index.vue, create resources/js/routes.js</p>
<p>Step11: Within resources/js/components/common/ folder, create Nav.vue, Dashboard.vue, Login.vue, Register.vue</p>
<p>Step12: Within resources/js/tests folder, create Login.test.js, Register.test.js</p>
<p>Step13: Update resources/views/layouts/app.blade.php resources/views/welcome.blade.php</p>
<p>Step14: add MIX_APP_URL="${APP_URL}" into .env</p>
<p>Step15: Update LoginController.php, RegisterController.php and AuthTest.php</p>

<p>If all the above works, the SPA Laravel Passport Vue Fullstack works. It includes frontend unittest by jest and backend unittests by phpunit.</p>
