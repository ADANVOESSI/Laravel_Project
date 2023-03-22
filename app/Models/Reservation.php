<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;

    protected $fillable = [
        'hotel',
        'date_Arr',
        'date_Sort',
        'adult',
        'child',
        'room',
        'nbr_room',
        'userID'
    ];

    
    public function user()
    {
        return $this->hasMany(User::class);
    }
}
