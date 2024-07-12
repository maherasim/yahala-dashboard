<?php
// App\Models\UserAction.php

namespace App\Models;

use Jenssegers\Mongodb\Eloquent\Model;

class UserAction extends Model
{
    protected $connection = 'mongodb';
    protected $collection = 'user_actions';

    protected $fillable = [
        'user_id',
        'action',
        'created_at',
        'updated_at',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
