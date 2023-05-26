<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class todolist extends Model
{
    use HasFactory;
    //ID, libelle, date
    protected $fillable = [
        'Libelle',
        'Date',
    ];
    
      public function Todolist(){
        $this->belongsTo(User::class);
    }
}
