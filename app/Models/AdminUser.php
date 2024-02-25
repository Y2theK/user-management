<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminUser extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $casts = [
        'is_active' => 'boolean'
    ];

    public function setPasswordAttribute($value){
        $this->attributes['password'] = bcrypt($value);
    }
    public function role(){
        return $this->belongsTo(Role::class);
    }
}
