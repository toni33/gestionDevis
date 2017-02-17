<div class="form-group">
	{!! Form::label('civilite', 'Civilite', []) !!}
	{!! Form::text('civilite', null, ['class'=>'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::label('nom', 'Nom', []) !!}
	{!! Form::text('nom', null, ['class'=>'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::label('prenom', 'Prenom', []) !!}
	{!! Form::text('prenom', null, ['class'=>'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::label('adresse', 'Adresse') !!}
	{!! Form::text('adresse', null, ['class'=>'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::label('code_postal', 'Code Postal') !!}
	{!! Form::text('code_postal', null, ['class'=>'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::label('localite', 'Localite') !!}
	{!! Form::text('localite', null, ['class'=>'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::label('ville', 'Ville') !!}
	{!! Form::text('ville', null, ['class'=>'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::label('pays', 'Pays') !!}
	{!! Form::text('pays', null, ['class'=>'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::label('email', 'Email') !!}
	{!! Form::text('email', null, ['class'=>'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::label('telephone', 'Téléphone') !!}
	{!! Form::text('telephone', null, ['class'=>'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::label('mobil', 'Mobil') !!}
	{!! Form::text('mobil', null, ['class'=>'form-control']) !!}
</div>

{!! Form::submit('Enregistrer', ['class'=>'btn btn-info']) !!}