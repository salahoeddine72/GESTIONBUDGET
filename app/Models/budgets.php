<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class budgets extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'Libelle',
        'Montant',
        'Nature',
        'Frequence',
    ];
    
      public function Budgets(){
        $this->belongsTo(User::class);
    }
}
