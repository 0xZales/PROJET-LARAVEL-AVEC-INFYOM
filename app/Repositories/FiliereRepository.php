<?php

namespace App\Repositories;

use App\Models\Filiere;
use App\Repositories\BaseRepository;

class FiliereRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'code',
        'libelle'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return Filiere::class;
    }
}
