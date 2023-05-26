<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class depenses extends Model
{
    use HasFactory;

    protected $fillable = [
        'Libelle',
        'Montant',
        'Nature',
        'Frequence',
    ];
    
      public function Depense(){
        $this->belongsTo(User::class);
    }
}
