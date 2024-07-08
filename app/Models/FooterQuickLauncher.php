<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;

class FooterQuickLauncher extends Model
{
    protected $connection = 'mongodb';
    use HasFactory;

    protected $fillable = [
        'language_id',
        'restorent',
        'food_pickup',
        'busineess_ideas',
        'services',
        'fan_page',
        'online_ship',
        'order_meal',
        'book_table',
        'emotions',
        'pray',
        'past_away',
        'shops',
        'fast_sharing',
        'go_to',
        'options',
        'current_notifications',
        'notifications',
        'fanpage',
        'onlineshop',
        'repeat_password',
    ];

    public function language()
    {
        return $this->belongsTo(Language::class);
    }
}
