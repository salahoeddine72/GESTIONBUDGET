<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class activites extends Model
{
    protected $fillable = [
        'Libelle',
        'Seuil',
        'Date',
        'Montant',
    ];

    public function Activites(){
        $this->belongsTo(User::class);
    }

}
