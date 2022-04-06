<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RealCommande extends Model
{
    use HasFactory;
    protected $table = "real_commandes";
    protected $fillable = ['nbarticlecmd', 'nomarticle','price'];
}
