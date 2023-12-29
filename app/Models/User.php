<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'balance',
        'role_id',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    public function roles()
    {
        return $this->belongsTo(Role::class);
    }

    public function isAdmin()
    {
        return $this->hasRole('admin');
    }

    public function isSuper()
    {
        return $this->hasRole('super');
    }

    // //
// User.php
    public function hasRole($role)
    {
        return $this::with('roles')->where('name', $role)->get() != null;
    }
<<<<<<< HEAD
=======
    //
>>>>>>> ed36b7ed32b05d86275ddbbbc4e1ee7989c3f5d2
    public function user()
    {
        return $this->belongsTo(User::class);
    }
<<<<<<< HEAD
   
    public function orders()
    {
        return $this->hasMany(Order::class);
    }
=======


// //
public function order()
    {
        return $this->belongsTo(Order::class);
    }
//
public function orders()
{
    return $this->hasMany(Order::class);
}
//

>>>>>>> ed36b7ed32b05d86275ddbbbc4e1ee7989c3f5d2
}
