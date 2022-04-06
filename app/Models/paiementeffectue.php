<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class paiementeffectue extends Model
{
    use HasFactory;
    protected $table = "paiementeffectues";
    protected $fillable = ['numcmd', 'idpaiement','pseudoorangemoney', 'numorangemoney'];
}
