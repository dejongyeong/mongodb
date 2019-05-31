# MongoDB

<b>IT Tralee Year 4 Semester 1</b>

MongoDB Portfolio for Advanced Database Programming in IT Tralee. Aim of this portfolio is to show the study outcome for performing MongoDB CRUD operation and MapReduce with the use of selected APIs from UI.

Implementation is related to big data where book details is stored in MongoDB.

Programming Language and APIs used for implementation:
* Laravel PHP Framework.
* [Jenssegers MongoDB API](https://github.com/jenssegers/laravel-mongodb)
* Twitter Bootstrap 4.
* HTML 5 and CSS 3.
* JavaScript and jQuery.

IDE used for implementation
* Microsoft Visual Studio Code.

## Pre-requisite
1. Install [MongoDB Driver](https://pecl.php.net/package/mongodb/1.5.3/windows) for PHP.<br>
2. Extract DLL zip file and extract inside PHP's <i>ext</i> directory.<br>
3. Add the following command in PHP Configuration file (php.ini)
```
extension=php_mongodb.dll
```


## Installation

Clone Repository

### Install required libraries
```
composer install
```
```
bower install
```
```
npm install
```

### Configuration
Set environment (env) file:
```
cp .env.example .env
```
Generate application key:
```
php artisan key:generate
```
Create database and add database settings to .env file.

### Live Preview
Starting Laravel server
```
php artisan serve
```

### Watching Assets for Changes
Webpack automatically recompile assets when detects a change.
```
npm run watch
```
Certain environments Webpack is not updating
```
npm run watch-poll
```

### Running Mix
Run all Mix tasks
```
npm run dev
```
Run all Mix tasks and minify output
```
npm run production
```
