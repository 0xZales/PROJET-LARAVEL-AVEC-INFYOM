<!-- Nom Field -->
<div class="col-sm-12">
    {!! Form::label('nom', 'Nom:') !!}
    <p>{{ $etudiant->nom }}</p>
</div>

<!-- Prenoms Field -->
<div class="col-sm-12">
    {!! Form::label('prenoms', 'Prenoms:') !!}
    <p>{{ $etudiant->prenoms }}</p>
</div>

<!-- Age Field -->
<div class="col-sm-12">
    {!! Form::label('age', 'Age:') !!}
    <p>{{ $etudiant->age }}</p>
</div>

<!-- Filiere Field -->
<div class="col-sm-12">
    {!! Form::label('filiere', 'Filiere:') !!}
    <p>{{ $etudiant->filiere }}</p>
</div>

