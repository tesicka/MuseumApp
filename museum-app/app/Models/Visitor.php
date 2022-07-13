<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Visitor extends Model
{
    use HasFactory;

    protected $fillable=[
        'name',
        'email',
        'age',
        'museum_id',
        'state_id',
    ];
    
    public function states()
    {
        return $this->belongsTo(State::class);
    }

    public function museums()
    {
        return $this->belongsTo(Museum::class);
    }
    

}
