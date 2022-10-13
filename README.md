
# [country-code-categorize](https://github.com/mohamedAbouda/country-code-categorize)
## Project Requirements

- > PHP >= 8.0
- > git
- > mysql 5.7.33

## How to run the project
    git clone https://github.com/mohamedAbouda/country-code-categorize

	cd country-code-categorize/

    composer install

    php artisan migrate

	php artisan serve

#### Commands included
A command to migrate the phone number valid state to a new column in the database to make the search and filteration easier 
##### parmaters

 - no parameters need for this command

##### example :

    php artisan customers:update-valid-status

 
    
