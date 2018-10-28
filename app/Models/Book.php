<?php

namespace App\Models;

use Mongo;
use Jenssegers\Mongodb\Eloquent\Model; 

// References: https://github.com/jenssegers/laravel-mongodb/issues/1341

class Book extends Model
{
    // Protected Field
    protected $connection = 'mongodb';
    protected $collection = 'books';

    
}
