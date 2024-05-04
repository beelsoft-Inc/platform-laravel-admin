
Requirements
------------
 - PHP >= 8.0.0
 - Laravel >= 9
 - Fileinfo PHP Extension

Installation
------------

> This package requires PHP 8+ and Laravel 9

First, install laravel 9, and make sure that the database connection settings are correct.

```
composer require tungnt/laravel-admin
```

Then run these commands to publish assets and config：

```
php artisan vendor:publish --provider="Tungnt\Admin\AdminServiceProvider"
```
After run command you can find config file in `config/admin.php`, in this file you can change the install directory,db connection or table names.

At last run following command to finish install.
```
php artisan admin:install
```

Open `http://localhost/admin/` in browser,use username `admin` and password `admin` to login.

Configurations
------------
The file `config/admin.php` contains an array of configurations, you can find the default configurations in there.

## Extensions


