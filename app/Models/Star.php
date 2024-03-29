<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Star extends Model
{
    use HasFactory;
    protected $fillable = [
        'starId',
        'starName',
        'bodyType',
        'starMeanRadius',
        'massValue',
        'massExponent',
        'starGravity',
    ];
    public function planets(){
        return $this->hasMany(Planet::class);
    }
}
