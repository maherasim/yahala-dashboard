<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;

class SigninSection extends Model
{
    protected $connection = 'mongodb';
    use HasFactory;

    protected $fillable = [
        'language_id',
        'email',
        'password',
        'repeat_password',
    ];

    public function language()
    {
        return $this->belongsTo(Language::class);
    }
}
