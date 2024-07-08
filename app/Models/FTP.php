<?php

namespace App\Models;

use Spatie\Activitylog\LogOptions;
//use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class FTP extends Model
{
    use HasFactory , LogsActivity;

    protected $fillable=[
        'ftp_for',
        'server_ip',
        'folder'
    ];


    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults();
    }

}
