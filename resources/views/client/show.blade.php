@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-default">
        <div class="panel-heading">Mon client
          @can('edit', $client)
          | <a href="{{ route('client.edit', $client->id) }}">Modifier</a>
          @endcan
        </div>

        <div class="panel-body">
          <h2>{{ $client->nom }}</h2>
          <p>
            {{ $client->email }}
          </p>
          <hr>
          @foreach($client->devis as $devis)
                <span class="label label-success">{{ $devis->date_devis }}</span>
           @endforeach
          <hr>
          <div class="row">
            <div class="col-md-12 text-right">
              {{ $client->created_at->format('l jS \\of F Y') }}
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
</div>
@endsection
