<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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

}
