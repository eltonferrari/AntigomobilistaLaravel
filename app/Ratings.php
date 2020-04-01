<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ratings extends Model
{
    public $primaryKey = 'idrating';
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'level', 
        'name', 
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'firstpoint', 
        'lastpoint', 
        'idcreator', 
        'idalterer',
        'remember_token',
        'created_at',
        'updated_at',
    ];

    protected $table = 'ratings';
}