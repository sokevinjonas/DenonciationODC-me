<?php

namespace App\Models;

use App\Models\User;
use App\Models\Temoignage;
use App\Models\SecteurActivite;
use App\Models\TypeAdministration;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Entreprise extends Model
{
    use HasFactory;

    protected $guarded = [
        'id',
        'created_at',
        'updated_at',
    ];

    public function secteurActivite(){
        return $this->belongsTo(SecteurActivite::class, 'secteur_activites_id', 'id');
    }

    public function typeAdministration(){
        return $this->belongsTo(TypeAdministration::class, 'type_administration_id', 'id');
    }

    public function temoignage(){
        return $this->belongsTo(Temoignage::class, 'temoignage_id', 'id');
    }

    public function moderateur(){
        return $this->belongsTo(User::class, 'moderateur_id', 'id');
    }

    public function supprimerPar(){
        return $this->belongsTo(User::class, 'supprimer_par_id', 'id');
    }

}
