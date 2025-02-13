<?php

namespace App\Models;

use App\Models\User;
use App\Models\Signal;
use App\Models\Entreprise;
use App\Models\Commentaire;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Temoignage extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = [
        'id',
        'created_at',
        'updated_at',
    ];

    public static function handleFileUpload($file, $typePreuve){
        // on determine le type de fichier 
        switch ($typePreuve) {
            case 'audio':
                $folder = 'audio';
                break;
            case 'video':
                $folder = 'video';
                break;
            case 'photo':
                $folder = 'photo';
            default:
                $folder = 'other';
                break;
        }
        // Déterminer le chemin de stockage
        $filePath = public_path($folder);
    
        // Créer le dossier s'il n'existe pas
        if (!file_exists($filePath)) {
            mkdir($filePath, 0777, true);
        }
    
        // Déplacer le fichier vers le dossier approprié
        $fileName = time() . '_' . $file->getClientOriginalName();
        $file->move($filePath, $fileName);
    
        // Retourner le chemin du fichier
        return "$folder/$fileName";
        
    }


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