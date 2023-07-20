<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory, SoftDeletes;

    protected $primaryKey = 'id';
    
    public $incrementing = false;

    protected $fillable = ['titre', 'sous_titre', 'type', 'description', 'icone'];

    protected $dates = ['deleted_at'];

    public function projets()
    {
        return $this->hasMany(Projet::class);
    }
}
