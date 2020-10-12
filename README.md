## Deployment instructions:

    
- **Optimization:**
    Run the following command to optimize Composer's class: 
    `composer install --optimize-autoloader --no-dev`
    Also, make sure to include a composer.lock file in the project's source control repository, so the dependencies can be installed much faster.

- **Optimizing Configuration Loading:**
    Make sure to run the following command during the deployment process: 
    `php artisan config:cache`
    This will combine all of Laravel's configuration files into a single, cached file, which greatly reduces the number of trips the framework must make to the         filesystem when loading your configuration values.
    You should be sure that you are only calling the *env* function from within your configuration files.

- **Optimizing Route Loading:**
    If you are building a large application with many routes, You should make sure that you are running the following command during your deployment process: 
    `php artisan route:cache`

- **Optimizing View Loading:**
    Run the following command during deployment process: 
    `php artisan view:cache`
    This will precomlie all your Blade views so they are not compiled on demand, improving the performance of each request that returns a view.
    
- **Deploying With Forge / Vapor:**
    If you aren't quite ready to manage your own server configuration or aren't comfortable configuring all of the various services needed to run a robust Laravel       application, you can use one of the following options:
    - https://forge.laravel.com/ 
      (Can create servers on various infrastructure providers such as DigitalOcean, Linode, AWS, and more)
      
    - https://vapor.laravel.com/ 
      (A serverless deployment platform for Laravel, powered by AWS)
