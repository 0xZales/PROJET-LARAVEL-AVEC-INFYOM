<?php

namespace App\Repositories;

use App\Models\Etudiant;
use App\Repositories\BaseRepository;

class EtudiantRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'nom',
        'prenoms',
        'age',
        'filiere'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return Etudiant::class;
    }
}
