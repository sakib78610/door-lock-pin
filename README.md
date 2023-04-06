## Installation 

Make a change and add this code in composer.json file so that composer can pull the package from git.

"repositories": [
    {
        "type": "vcs",
        "url": "https://github.com/sakib78610/door-lock-pin"
    }
]

Execute the following command to install the package
## composer require sakib/doorspin

## add Sakib78610\Doorspin\Providers\DoorsLockProvider::class inside the config/app.php

## Run php artisan serve

## enter http://127.0.0.1:8000/door-pin


