<div class="card-body p-0">
    <div class="table-responsive">
        <table class="table" id="filieres-table">
            <thead>
            <tr>
                <th>Code</th>
                <th>Libelle</th>
                <th colspan="3">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($filieres as $filiere)
                <tr>
                    <td>{{ $filiere->code }}</td>
                    <td>{{ $filiere->libelle }}</td>
                    <td  style="width: 120px">
                        {!! Form::open(['route' => ['filieres.destroy', $filiere->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{{ route('filieres.show', [$filiere->id]) }}"
                               class='btn btn-default btn-xs'>
                                <i class="far fa-eye"></i>
                            </a>
                            <a href="{{ route('filieres.edit', [$filiere->id]) }}"
                               class='btn btn-default btn-xs'>
                                <i class="far fa-edit"></i>
                            </a>
                            {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Etes vous sure(e)?')"]) !!}
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
            @include('adminlte-templates::common.paginate', ['records' => $filieres])
        </div>
    </div>
</div>
