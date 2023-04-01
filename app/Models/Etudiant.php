<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Etudiant extends Model
{
    public $table = 'etudiants';

    public $fillable = [
        'nom',
        'prenoms',
        'age',
        'filiere'
    ];

    protected $casts = [
        'nom' => 'string',
        'prenoms' => 'string'
    ];

    public static array $rules = [
        'nom' => 'required|string|max:20',
        'prenoms' => 'nullable|string|max:50',
        'age' => 'nullable',
        'filiere' => 'required',
        'created_at' => 'nullable',
        'updated_at' => 'nullable',
        'deleted_at' => 'nullable'
    ];

    public function filieres(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(\App\Models\Filiere::class, 'filiere');
    }
}
