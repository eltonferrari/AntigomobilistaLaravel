<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Events extends Model
{
    public $primaryKey = 'idevent';
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'date',
        'city',
        'locale',
        'description',
        'image',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'iduser',
        'created_at',
        'updated_at',
    ];
    protected $table = 'events';
}