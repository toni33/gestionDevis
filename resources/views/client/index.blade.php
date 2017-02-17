@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Liste des clients</div>
                <div class="panel-body">
                <table class="table">
                    <tbody>
                        @foreach($clients as $client)
                        <tr>
                            <td><a href="{{ route('client.show', $client->id) }}">{{ $client->nom }}</a></td>
                            <td><a href="{{ route('client.edit', $client->id) }}" class="btn btn-info btn-xs">Edit</a></td>

                            @can('destroy', App\User::class)
                            <td>
                            {!! Form::open(['url' => route('client.destroy', $client->id), 'method' => 'delete']) !!}
                                <button class="btn btn-xs">Supprimer</button>
                            {!! Form::close() !!}
                            </td>
                            @endcan

                        </tr>
                        @endforeach
                    </tbody>
                </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
