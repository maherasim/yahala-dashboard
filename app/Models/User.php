<?php
 namespace App\Models;

 use Jenssegers\Mongodb\Auth\User as Authenticatable;
 use Illuminate\Contracts\Auth\MustVerifyEmail;
 use Laravel\Sanctum\HasApiTokens;
 use Spatie\Permission\Traits\HasRoles;
 use Illuminate\Notifications\Notifiable;
 use Illuminate\Database\Eloquent\Factories\HasFactory;
 
 class User extends Authenticatable implements MustVerifyEmail
 {
     use HasApiTokens, HasFactory, Notifiable, HasRoles;
 
     protected $connection = 'mongodb';
     protected $collection = 'users';
 
     protected $fillable = [
         'name',
         'email',
         'password',
         'image',
         'status',
         'level',
         'username',
         'fname',
         'lname',
         'gender',
         'dob',
         'address',
         'province',
         'city',
         'province_city',
         'country',
         'is_admin_user',
         'is_superadmin',
     ];
 
     protected $hidden = [
         'password',
         'remember_token',
     ];
 
     protected $casts = [
         'email_verified_at' => 'datetime',
     ];
     public function actions()
     {
         // Example assuming you have a related model like UserAction
         return $this->hasMany(UserAction::class);
     }
 }
 