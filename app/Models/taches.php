<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class taches extends Model
{
    use HasFactory;

    protected $fillable = [
        'Libelle',
        'Etat',
        'Ordre',
    ];
    
      public function Taches(){
        $this->belongsTo(User::class);
    }
}
