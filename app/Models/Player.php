<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'password',
        'remember_token',
        
    ];

    public function games()
    {
        return $this->belongsToMany(Game::class);
    }
}