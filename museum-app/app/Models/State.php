<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    use HasFactory;

    protected $fillable=[
        'name',
        'currency',
        
    ];

    public function visitors()
    {
        return $this->hasMany(Visitor::class);
    }
}
