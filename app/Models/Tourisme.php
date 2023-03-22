<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tourisme extends Model
{
    use HasFactory;

    protected $fillable = ["lname", "fname", "civilite", "image"];

    public function guide(){
        return $this->belongsTo(Guide::class);
    }
}
