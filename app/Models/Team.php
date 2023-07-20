<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Team extends Model
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

    protected $fillable = ['noms', 'prenoms', 'poste', 'image'];

    protected $dates = ['deleted_at'];
}
