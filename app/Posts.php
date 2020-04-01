<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    public $primaryKey = 'idpost';
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'image',
        'brand',
        'age',
        'description',
        'sell',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'iduser',
        'idtype',
        'created_at',
        'updated_at',
    ];
    protected $table = 'posts';
}