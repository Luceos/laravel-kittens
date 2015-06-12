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

Available kitten types are: Basic, Curious, Funny, Grumpy, Moon, Nyan, Schrodinger

###Troubleshooting
If the command isn't displayed among other artisan commands, try running `php artisan clear-compiled` first.

###Contribute
Feel free to make PRs if you wish to contribute to the package. Just check out some of the examples in the Toniperic\Kittens\Kittens namespace!
