<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateEtudiantRequest;
use App\Http\Requests\UpdateEtudiantRequest;
use App\Http\Controllers\AppBaseController;
use App\Repositories\EtudiantRepository;
use Illuminate\Http\Request;
use Flash;
use App\Models\Filiere;

class EtudiantController extends AppBaseController
{
    /** @var EtudiantRepository $etudiantRepository*/
    private $etudiantRepository;

    public function __construct(EtudiantRepository $etudiantRepo)
    {
        $this->etudiantRepository = $etudiantRepo;
    }

    /**
     * Display a listing of the Etudiant.
     */
    public function index(Request $request)
    {
        $etudiants = $this->etudiantRepository->paginate(10);
        
        return view('etudiants.index')
            ->with('etudiants', $etudiants);
    }

    /**
     * Show the form for creating a new Etudiant.
     */
    public function create()
    {
        $filiere = 0;
        $filieres=Filiere::orderby('libelle')->pluck('libelle','id');
        return view('etudiants.create')->with('filieres',$filieres)->with('filiere',$filiere);
    }

    /**
     * Store a newly created Etudiant in storage.
     */
    public function store(CreateEtudiantRequest $request)
    {
        $input = $request->all();

        $etudiant = $this->etudiantRepository->create($input);

        Flash::success('Etudiant saved successfully.');

        return redirect(route('etudiants.index'));
    }

    /**
     * Display the specified Etudiant.
     */
    public function show($id)
    {
        $etudiant = $this->etudiantRepository->find($id);

        if (empty($etudiant)) {
            Flash::error('Etudiant not found');

            return redirect(route('etudiants.index'));
        }

        return view('etudiants.show')->with('etudiant', $etudiant);
    }

    /**
     * Show the form for editing the specified Etudiant.
     */
    public function edit($id)
    {
        $etudiant = $this->etudiantRepository->find($id);
        $filieres=Filiere::orderby('libelle')->pluck('libelle','id');
        if (empty($etudiant)) {
            Flash::error('Etudiant not found');

            return redirect(route('etudiants.index'));
        }

        return view('etudiants.edit')->with('etudiant', $etudiant)->with('filieres',$filieres)->with('filiere',$etudiant->filiere);
    }

    /**
     * Update the specified Etudiant in storage.
     */
    public function update($id, UpdateEtudiantRequest $request)
    {
        $etudiant = $this->etudiantRepository->find($id);

        if (empty($etudiant)) {
            Flash::error('Etudiant not found');

            return redirect(route('etudiants.index'));
        }

        $etudiant = $this->etudiantRepository->update($request->all(), $id);

        Flash::success('Etudiant updated successfully.');

        return redirect(route('etudiants.index'));
    }

    /**
     * Remove the specified Etudiant from storage.
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        $etudiant = $this->etudiantRepository->find($id);

        if (empty($etudiant)) {
            Flash::error('Etudiant not found');

            return redirect(route('etudiants.index'));
        }

        $this->etudiantRepository->delete($id);

        Flash::success('Etudiant deleted successfully.');

        return redirect(route('etudiants.index'));
    }
}
