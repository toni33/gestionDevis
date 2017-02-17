@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                

                <div class="panel-body">
                    Menu Principal
                </div>
                <hr>
                <!-- <div class="panel-heading">Menu Principal</div> -->
                <div class="links">
                    <a href="/client/create" class="btn btn-info">Saisir un Client</a>         
                    <a href="/devis/create">Saisir un Devis   ¦</a>
                    <a href="/article/create">Saisir un Article   ¦</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
