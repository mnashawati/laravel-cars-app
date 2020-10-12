## Deployment instructions:


- **Prepare and Configure Your Dedicated Server:**
     If you aren't quite ready to manage your own server configuration or aren't comfortable configuring all of the various services needed to run a robust Laravel application, you can use one of the following options:
    - https://forge.laravel.com/ 
      (Can create servers on various infrastructure providers such as DigitalOcean, Linode, AWS, and more)
      
    - https://vapor.laravel.com/ 
      (A serverless deployment platform for Laravel, powered by AWS)

- **Configure MySQL:**
     You need to create a database specific to your project, and a user to access it.

- **.env file:**
      Copy the example file as your main .env file with this command: `cp .env.example .env`.
      The main variables to change are your app URL and database credentials, then add your database credentials in the domain configuration: 
        APP_URL=http://localhost
        DB_CONNECTION=mysql
        DB_HOST=127.0.0.1
        DB_PORT=3306
        DB_DATABASE=homestead
        DB_USERNAME=homestead
        DB_PASSWORD=secret

- **Generate Application Key:**
     Run the following command: `php artisan key:generate`

- **Migrate DB Schema:**
     Run the following command: `php artisan migrate`

- **Launch!**

- **Optimization:**
    Run the following command to optimize Composer's class: 
    `composer install --optimize-autoloader --no-dev`
    Also, make sure to include a composer.lock file in the project's source control repository, so the dependencies can be installed much faster.

- **Optimizie Configuration Loading:**
    Make sure to run the following command during the deployment process: 
    `php artisan config:cache`
    This will combine all of Laravel's configuration files into a single, cached file, which greatly reduces the number of trips the framework must make to the         filesystem when loading your configuration values.
    You should be sure that you are only calling the *env* function from within your configuration files.

- **Optimizie Route Loading:**
    If you are building a large application with many routes, You should make sure that you are running the following command during your deployment process: 
    `php artisan route:cache`

- **Optimizie View Loading:**
    Run the following command during deployment process: 
    `php artisan view:cache`
    This will precomlie all your Blade views so they are not compiled on demand, improving the performance of each request that returns a view.
