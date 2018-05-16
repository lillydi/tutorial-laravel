<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model as Moloquent;

class Book extends Moloquent
{
    protected $connection = 'mongodb';
    protected $collection = 'books';

    protected $fillable = [
        'name', 'detail'
    ];
}
