<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recurso extends Model
{
    use FullTextSearch;


    protected $searchable = [
        'title',
        'subject',
        'description',
        'creator'
    ];
}
