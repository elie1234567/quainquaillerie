<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Achat extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom',
        'produita',
        'prixa',
        'quantita',
        'daty',
        'totaly',
        'prixachat',
        'benefice',
    ];
}
