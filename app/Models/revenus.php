<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class revenus extends Model
{
    use HasFactory;

   protected $fillable = [
        'Libelle',
        'Montant',
        'Nature',
        'Frequence',
        'date_arr',
        'source',
    ];
    
      public function Revenu(){
        $this->belongsTo(User::class);
    }
}
