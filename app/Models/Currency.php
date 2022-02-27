<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Currency extends Model
{

    use HasFactory;

    protected $primarykey = 'iso' ;

    public $incrementing = false ;

    public $timestamps = false;

    protected $fillable = [
        'iso',
    ];

}
