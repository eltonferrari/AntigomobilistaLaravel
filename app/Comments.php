<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{
    public $primaryKey = 'idcomment';
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'comment',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'iduser',
        'idpost',
        'created_at',
        'updated_at',
    ];
    protected $table = 'messages';
}