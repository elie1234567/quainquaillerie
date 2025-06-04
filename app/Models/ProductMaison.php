<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductMaison extends Model
{
    use HasFactory;
    // Nom de la table associée au modèle
    protected $table = 'product_maisons';

    // Clé primaire personnalisée
    protected $primaryKey = 'idm';

    // Indiquer que la clé primaire n'est pas un auto-increment
    public $incrementing = false;

    // Type de la clé primaire
    protected $keyType = 'int';

    // Attributs pouvant être assignés en masse
    protected $fillable = [
        'articlem', 
        'quantitem', 
        'prixem', 
        'imagem'
    ];

    // Cast l'attribut imagee en BLOB
   
}
