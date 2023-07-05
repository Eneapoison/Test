<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Disponibility extends Model
{
    use HasFactory;
    public function park()
    {
        return $this->belongsTo(Park::class, 'park_id');
    }
}
