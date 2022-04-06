<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rdv extends Model
{
    use HasFactory;
    protected $table = "rdvs";
    protected $fillable = ['name', 'surname','adressemail', 'telephone', 'contenu'];
}
