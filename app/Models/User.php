<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $guarded = [
        'id',
        'created_at',
        'updated_at',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function creerPar(){
        return $this->belongsTo(User::class, 'admin_id', 'id');
    }

    public function retroActions(){
        return $this->hasMany(Temoignage::class, 'moderateur_retro_action_id', 'id');
    }

    public function temoignages(){
        return $this->hasMany(Temoignage::class, 'user_id', 'id');
    }

    public function commentaires(){
        return $this->hasMany(Commentaire::class, 'user_id', 'id');
    }

    public function entreprises(){
        return $this->hasMany(Entreprise::class, 'moderateur_id', 'id');
    }

    public function secteursActivite(){
        return $this->hasMany(SecteurActivite::class, 'moderateur_id', 'id');
    }

    public function signals(){
        return $this->hasMany(User::class, 'user_id', 'id');
    }

    public function temoignageSupprimer(){
        return $this->hasMany(Temoignage::class, 'supprimer_par_id', 'id');
    }
}
