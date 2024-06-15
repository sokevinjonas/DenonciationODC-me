<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Temoignage extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = [
        'id',
        'created_at',
        'updated_at',
    ];

    public function commentaires(){
        return $this->hasMany(Commentaire::class, 'temoignage_id', 'id');
    }

    public function entreprise(){
        return $this->hasOne(Entreprise::class, 'temoignage_id', 'id');
    }

    public function signals(){
        return $this->hasMany(Signal::class, 'temoignage_id', 'id');
    }

    public function creePar(){
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function retroActionPar(){
        return $this->belongsTo(User::class, 'moderateur_retro_action_id', 'id');
    }

    public function supprimerPar(){
        return $this->belongsTo(User::class, 'supprimer_par_id', 'id');
    }
}
