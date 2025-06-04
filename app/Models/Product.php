<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    // Nom de la table associée au modèle
    protected $table = 'products';

    // Clé primaire personnalisée
    protected $primaryKey = 'idE';

    // Indiquer que la clé primaire n'est pas un auto-increment
    public $incrementing = false;

    // Type de la clé primaire
    protected $keyType = 'int';

    // Attributs pouvant être assignés en masse
    protected $fillable = [
        'articlee', 
        'quantitee', 
        'prixee', 
        'imagee'
    ];

    public function calculateProfit()
    {
        return $this->prixee - $this->prix_achat;
    }
}
