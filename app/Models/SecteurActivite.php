<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SecteurActivite extends Model
{
    use HasFactory;

    protected $guarded = [
        'id',
        'created_at',
        'updated_at',
    ];

    public function entreprises(){
        return $this->hasMany(Entreprise::class, 'secteur_activites_id', 'id');
    }

    public function moderateur(){
        return $this->belongsTo(User::class, 'moderateur_id', 'id');
    }
}
