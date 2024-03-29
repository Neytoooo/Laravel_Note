<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    use HasFactory;

    
protected $fillable = ['title', 'content'];


    // Ajoutez des relations avec d'autres modèles si nécessaire
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

