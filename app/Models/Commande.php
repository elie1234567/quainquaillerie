<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commande extends Model
{
    use HasFactory;
    
    protected $table = 'commandes'; 

    protected $primaryKey = 'idproduit'; // Clé primaire de votre table

    public $incrementing = true; // Si votre clé primaire est auto-incrémentée ou non

    protected $keyType = 'int'; // Type de la clé primaire

    protected $fillable = [
        'idproduit',
        'email',
        'quantiter',
        'prix',
        'date_comm',
        'idclit'
    ]; 

    protected $casts = []; 
}
