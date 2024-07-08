<?php

namespace App\Models;

use Spatie\Activitylog\LogOptions;
use Jenssegers\Mongodb\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Language extends Model
{

    protected $fillable = [
        'title',
        'description',
        'alert',
        'upgrade',
        'premium',
        'vip',
        'monthly',
        'feeds',
        'text_comments',
        'music_player',
        'video_playlist',
        'discount_percentage',
        'stories',
        'voice_comments',
        'live_stream',
        'fanpage',
        'gift_description',
        'show_gift',
        'congratulations_educated',
        'congratulations_academic',
        'premium_description',
        'go_back_home',
        'activation_code_mail',
        'password_code_mail',
        'fanpage_activation_code',
        'one_time_code',
        'follow_steps_device',
        'welcome',
        // Add more fields as per your actual database schema
    ];
    
    protected $connection = 'mongodb';
    use HasFactory, LogsActivity;

    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults();
    }
    public function keywords()
    {
        return $this->hasMany(LanguageKeyword::class);
    }
    public function translations ()
    {
        return $this->hasMany(Translation::class, 'language_id');
    }

}
