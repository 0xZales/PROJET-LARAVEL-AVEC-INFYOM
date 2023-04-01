<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateFiliereRequest;
use App\Http\Requests\UpdateFiliereRequest;
use App\Http\Controllers\AppBaseController;
use App\Repositories\FiliereRepository;
use Illuminate\Http\Request;
use Flash;

class FiliereController extends AppBaseController
{
    /** @var FiliereRepository $filiereRepository*/
    private $filiereRepository;

    public function __construct(FiliereRepository $filiereRepo)
    {
        $this->filiereRepository = $filiereRepo;
    }

    /**
     * Display a listing of the Filiere.
     */
    public function index(Request $request)
    {
        $filieres = $this->filiereRepository->paginate(10);

        return view('filieres.index')
            ->with('filieres', $filieres);
    }

    /**
     * Show the form for creating a new Filiere.
     */
    public function create()
    {
        return view('filieres.create');
    }

    /**
     * Store a newly created Filiere in storage.
     */
    public function store(CreateFiliereRequest $request)
    {
        $input = $request->all();

        $filiere = $this->filiereRepository->create($input);

        Flash::success('Filiere saved successfully.');

        return redirect(route('filieres.index'));
    }

    /**
     * Display the specified Filiere.
     */
    public function show($id)
    {
        $filiere = $this->filiereRepository->find($id);

        if (empty($filiere)) {
            Flash::error('Filiere not found');

            return redirect(route('filieres.index'));
        }

        return view('filieres.show')->with('filiere', $filiere);
    }

    /**
     * Show the form for editing the specified Filiere.
     */
    public function edit($id)
    {
        $filiere = $this->filiereRepository->find($id);

        if (empty($filiere)) {
            Flash::error('Filiere not found');

            return redirect(route('filieres.index'));
        }

        return view('filieres.edit')->with('filiere', $filiere);
    }

    /**
     * Update the specified Filiere in storage.
     */
    public function update($id, UpdateFiliereRequest $request)
    {
        $filiere = $this->filiereRepository->find($id);

        if (empty($filiere)) {
            Flash::error('Filiere not found');

            return redirect(route('filieres.index'));
        }

        $filiere = $this->filiereRepository->update($request->all(), $id);

        Flash::success('Filiere updated successfully.');

        return redirect(route('filieres.index'));
    }

    /**
     * Remove the specified Filiere from storage.
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        $filiere = $this->filiereRepository->find($id);

        if (empty($filiere)) {
            Flash::error('Filiere not found');

            return redirect(route('filieres.index'));
        }

        $this->filiereRepository->delete($id);

        Flash::success('Filiere deleted successfully.');

        return redirect(route('filieres.index'));
    }
}
