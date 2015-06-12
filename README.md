# Introduction
Everyone loves kittens! Have them on your terminal, artisan!
**Please note this will work with Laravel 5.1 and greater!**

##Installation
###Step #1
```
composer require toniperic/kittens=~1.0
```
###Step #2
Add `Toniperic\Kittens\KittensServiceProvider::class` to **providers** array in *config/app.php*

##Usage
- `php artisan meow`
- `php artisan meow:list`


###Troubleshooting
If the command isn't displayed among other artisan commands, try running `php artisan clear-compiled` first.

###Contribute
Feel free to make PRs if you wish to contribute to the package.
