<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class payment extends Model
{
    use HasFactory;
    protected $table = 'payment';
    
    protected $primaryKey = 'idpaye';

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
