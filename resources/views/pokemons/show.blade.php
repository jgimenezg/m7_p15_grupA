@extends('pokemons.layout')

@section('content')

    <div class="row">

        <div class="col-lg-12 margin-tb">

            <div class="pull-left">

                <h2> Ensenya Pokemon</h2>

            </div>

            <div class="pull-right">

                <a class="btn btn-primary" href="{{ route('pokemons.index') }}"> Enrere</a>

            </div>

        </div>

    </div>

   

    <div class="row">

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Nom:</strong>

                {{ $pokemon->nom}}

            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Tipus:</strong>

                {{ $pokemon->tipus }}

            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Descripcio:</strong>

                {{ $pokemon->descripcio }}

            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Nivell:</strong>

                {{ $pokemon->nivell }}

            </div>

        </div>

    </div>

@endsection