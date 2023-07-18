<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['titre', 'sous_titre', 'type', 'description', 'icone'];

    protected $dates = ['deleted_at'];
}
