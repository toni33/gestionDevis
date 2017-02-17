@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            @include('layouts.errors')
            <div class="panel panel-default">
                <div class="panel-heading">Edit un client</div>
                <div class="panel-body">
                    {!! Form::model($client, ['method' => 'PATCH', 'route' => ['client.update', $client->id]]) !!}

                    @include('client.form')
                    
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
