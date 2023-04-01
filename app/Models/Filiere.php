<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Filiere extends Model
{
    public $table = 'filieres';

    public $fillable = [
        'code',
        'libelle'
    ];

    protected $casts = [
        'code' => 'string',
        'libelle' => 'string'
    ];

    public static array $rules = [
        'code' => 'nullable|string|max:20',
        'libelle' => 'nullable|string|max:30',
        'created_at' => 'nullable',
        'updated_at' => 'nullable',
        'deleted_at' => 'nullable'
    ];

    public function etudiants(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(\App\Models\Etudiant::class, 'filiere');
    }
}
