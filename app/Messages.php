<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Messages extends Model
{
    public $primaryKey = 'idmessage';
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'message',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'idsender',
        'idreceptor',
        'created_at',
        'updated_at',
    ];
    protected $table = 'messages';
}