<!-- Nom Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nom', 'Nom:') !!}
    {!! Form::text('nom', null, ['class' => 'form-control', 'required', 'maxlength' => 20, 'maxlength' => 20]) !!}
</div>

<!-- Prenoms Field -->
<div class="form-group col-sm-6">
    {!! Form::label('prenoms', 'Prenoms:') !!}
    {!! Form::text('prenoms', null, ['class' => 'form-control', 'maxlength' => 50, 'maxlength' => 50]) !!}
</div>

<!-- Age Field -->
<div class="form-group col-sm-6">
    {!! Form::label('age', 'Age:') !!}
    {!! Form::number('age', null, ['class' => 'form-control']) !!}
</div>

<!-- Filiere Field -->
<div class="form-group col-sm-6">
{!! Form::label('filiere', 'Filiere:') !!}
    {!! Form::select('filiere', $filieres, $filiere, ['class' => 'form-control']) !!}
</div>