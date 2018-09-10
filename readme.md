## DisAPI

### This is a WIP, use at your own risk.

A RESTful OpenAPI spec API around the Walt Disney World Resort 

#### To see ReDoc: 
```
yarn run speccy serve specs/openapi.yml
```

And then go to localhost:5000 to see the documentation

#### Endpoints

Work with the Parks Resource Collection
```php
    GET/POST /parks
```
```php
    GET/PUT/DELETE /parks/{id}
```

Work with the Rides Resource Collection
```php
    GET/POST /rides
```
```php
    GET/PUT/DELETE rides/{id}
```

Work with the Restaurants Resource Collection
```php
    GET/POST /restaurants
```
```php
    GET/PUT/DELETE /restaurants
```

Work with the Resorts Resource Collection
```php
    GET/POST /resorts
```
```php
    GET/PUT/DELETE /restaurants/{id}
```

#### Requirements

* Composer
* Yarn

#### Installation

If you want to install a local copy of this project

* Clone to your local
* Cd to project, and composer install the dependencies
* To use Homestead, edit the path in Homestead.yaml to reflect your local and: 
```php
$ ./vendor/bin/homestead make && vagrant up
```
* Edit your /etc/hosts (not sure about windows) and add ```192.168.10.10 homestead.test``` or whatever you want it to be.
* ```vagrant ssh``` and cd to root of project
* Install JS dependencies with Yarn (needed for Speccy)
* Migrate and Seed the Database with ```php artisan migrate && php artisan db:seed```
* Alternatively, you could import the data.sql file into your local mysql instance
* Open Postman and hit the endpoints above to ensure it works. 

If you see an issue, hit me up on twitter @matthewtrask