<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{

    protected $fillable = [
        'age',
        'user_id',
        'city',
        'gender',
        'job',
        'bio'
    ];

    public function user()
    {
        return $this->belongsTo('App\User', 'user_id');
    }
}
