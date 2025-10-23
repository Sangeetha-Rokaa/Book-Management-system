<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable=[

    
   'title',
   'author',
   'publisher',
   'book_published',
   'book_price',
   'author_picture',
    ];
}
