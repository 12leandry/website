<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Service extends Model
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

    protected $fillable = ['titre', 'sous_titre', 'type', 'description', 'icone'];

    protected $dates = ['deleted_at'];

    public function projets()
    {
        return $this->hasMany(Projet::class);
    }
}
