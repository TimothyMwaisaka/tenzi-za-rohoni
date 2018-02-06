<?php

/*
|--------------------------------------------------------------------------
| Author: Timothy Mwaisaka
|--------------------------------------------------------------------------
| Email: timothymwaisaka@gmail.com
|--------------------------------------------------------------------------
| Date: 21/10/2017
|--------------------------------------------------------------------------
|
*/

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hymn extends Model
{
    protected $fillable = ['number', 'title', 'song'];
}
