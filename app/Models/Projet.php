<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Projet extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['titre', 'sous_titre', 'service_id', 'description', 'icone', 'client_name', 'projet_date'];

    protected $dates = ['deleted_at'];

    public function service()
    {
        return $this->belongsTo(Service::class, 'service_id');
    }
}
