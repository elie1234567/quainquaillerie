<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class historique extends Model
{
    use HasFactory;
    protected $table = 'historique';
    
    protected $primaryKey = 'id_histo';

    protected $fillable = [
        'command_idp',
        'emailp',
        'produitp',
        'prixp',
        'quantitep',
        'datep',
        'totale',
    ];
}
