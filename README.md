# Project Title
tajawal Task

[![Build Status](https://travis-ci.org/travis-ci-examples/php.svg?branch=master)](https://travis-ci.org/travis-ci-examples/php)

## TASK
The objective of this challenge is to hit an endpoint containing the list of hotels and perform some actions on the result. It should be an easy task for anyone with basic programming skills. The challenge must be solved in PHP.

The URL containing the list of hotels can be found at [https://api.myjson.com/bins/tl0bp](https://api.myjson.com/bins/tl0bp)

## Requirements and Output

#### Create an application (console or RESTful API) to **allow search** in the given inventory by any of the following:

- Hotel Name
- Destination [City]
- Price range [ex: $100:$200]
- Date range [ex: 10-10-2020:15-10-2020]

and allow sorting by:

- Hotel Name
- Price



## Installation
Using Composer :

```
composer install
```

If you don't have composer, you can get it from [Composer](https://getcomposer.org/)


## How to  Run the application
this application used by call route 
types = name,destination,price,date
```
php index.php
```

```
index.php?type=name&name=Concorde Hotel&sort=price  to search by name
```

```
index.php?type=destination&city=Manila&sort=pricet  to search by destination
```


```
index.php?type=price&min=1.2&max=100  to search by price
```


```
index.php?type=date&from=10-10-2020&to=15-10-201  to search by destination
```

to sort add anther parameter (sort) type(name | price)
Example

```
index.php?type=name&name=test&sort=name  
```



## Tests
To run tests make sure you are in the main folder, and then you can run this command line :

```
./vendor/bin/phpunit

```

## My coverage for  testing
tajawal/app/src/tests/coverage/src/index.html



### CI

- Implement[scrutinizer-ci](https://scrutinizer-ci.com)  CI tool for the project

![ScreenShot](scrutinizer-ci-(Native).png)

