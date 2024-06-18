<?php

namespace App\Models;

use App\Models\User;
use App\Models\Temoignage;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Commentaire extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = [
        'id',
        'created_at',
        'updated_at',
    ];

    public function reponses(){
         return $this->hasMany(Commentaire::class, 'reponse_id', 'id');
    }

    public function creePar(){
        return $this->belongsTo(User::class, 'user_id');
    }

    public function temoignage(){
        return $this->belongsTo(Temoignage::class, 'temoignage_id', 'id');
    }

    public function supprimerPar(){
        return $this->belongsTo(User::class, 'supprimer_par_id', 'id');
    }
}

