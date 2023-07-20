<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Projet extends Model
{
    use HasFactory, SoftDeletes;

    protected $primaryKey = 'id';

    public $incrementing = false;

    // Mutateur pour générer un UUID lors de la création d'un projet
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $model->{$model->getKeyName()} = (string) Str::uuid();
        });
    }

    // Définir un mutateur pour la propriété projet_date
    public function getProjetDateAttribute($value)
    {
        // Formater la date au format "année-mois-jour"
        return date('Y-m-d', strtotime($value));
    }

    protected $fillable = ['titre', 'sous_titre', 'service_id', 'description_paragraphe_1', 'description_paragraphe_2', 'description_paragraphe_3', 'icone', 'client_name', 'projet_date'];

    protected $dates = ['deleted_at'];

    public function service()
    {
        return $this->belongsTo(Service::class, 'service_id');
    }
}
