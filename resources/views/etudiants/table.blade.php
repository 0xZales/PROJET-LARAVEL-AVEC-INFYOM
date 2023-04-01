<div class="card-body p-0">
    <div class="table-responsive">
        <table class="table" id="etudiants-table">
            <thead>
            <tr>
                <th>Nom</th>
                <th>Prenoms</th>
                <th>Age</th>
                <th>Filiere</th>
                <th colspan="3">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($etudiants as $etudiant)
                <tr>
                    <td>{{ $etudiant->nom }}</td>
                    <td>{{ $etudiant->prenoms }}</td>
                    <td>{{ $etudiant->age }}</td>
                    <td>{{ $etudiant->filieres["libelle"] }}</td>
                    <td  style="width: 120px">
                        {!! Form::open(['route' => ['etudiants.destroy', $etudiant->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{{ route('etudiants.show', [$etudiant->id]) }}"
                               class='btn btn-default btn-xs'>
                                <i class="far fa-eye"></i>
                            </a>
                            <a href="{{ route('etudiants.edit', [$etudiant->id]) }}"
                               class='btn btn-default btn-xs'>
                                <i class="far fa-edit"></i>
                            </a>
                            {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Etes vous sur(e)?')"]) !!}
                        </div>
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

    <div class="card-footer clearfix">
        <div class="float-right">
            @include('adminlte-templates::common.paginate', ['records' => $etudiants])
        </div>
    </div>
</div>
