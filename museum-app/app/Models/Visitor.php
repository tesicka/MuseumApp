<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Visitor extends Model
{
    use HasFactory;

    protected $fillable=[
        'nameAndSurname',
        'email',
        'age',
        'museum_id',
        'state_id',
    ];

    
    
    public function state()
    {
        return $this->belongsTo(State::class);
    }

    public function museum()
    {
        return $this->belongsTo(Museum::class);
    }
    

}
