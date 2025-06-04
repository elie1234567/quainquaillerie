<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Productvoiture extends Model
{
    use HasFactory;
     // Nom de la table associée au modèle
     protected $table = 'productvoitures';

     // Clé primaire personnalisée
     protected $primaryKey = 'idv';
 
     // Indiquer que la clé primaire n'est pas un auto-increment
     public $incrementing = false;
 
     // Type de la clé primaire
     protected $keyType = 'int';
 
     // Attributs pouvant être assignés en masse
     protected $fillable = [
         'articlev', 
         'quantitev', 
         'prixev', 
         'imagev'
     ];
 
}
