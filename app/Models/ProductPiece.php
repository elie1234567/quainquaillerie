<?php

namespace App\Models;
//
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductPiece extends Model
{
    use HasFactory;
     // Nom de la table associée au modèle
     protected $table = 'product_pieces';

     // Clé primaire personnalisée
     protected $primaryKey = 'idp';
 
     // Indiquer que la clé primaire n'est pas un auto-increment
     public $incrementing = false;
 
     // Type de la clé primaire
     protected $keyType = 'int';
 
     // Attributs pouvant être assignés en masse
     protected $fillable = [
         'articlep', 
         'quantitep', 
         'prixep', 
         'imagep'
     ];
 
     // Cast l'attribut imagee en BLOB
     
}
