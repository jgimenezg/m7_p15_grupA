@extends('pokemons.layout')

   

@section('content')

    <div class="row">

        <div class="col-lg-12 margin-tb">

            <div class="pull-left">

                <h2>Edita Pokemon</h2>

            </div>

            <div class="pull-right">

                <a class="btn btn-primary" href="{{ route('pokemons.index') }}"> Enrere</a>

            </div>

        </div>

    </div>

   

    @if ($errors->any())

        <div class="alert alert-danger">

            <strong>Ondia!</strong> Sembla haver problemes amb el teu input.<br><br>

            <ul>

                @foreach ($errors->all() as $error)

                    <li>{{ $error }}</li>

                @endforeach

            </ul>

        </div>

    @endif

  

    <form action="{{ route('pokemons.update',$pokemon->id) }}" method="POST">

        @csrf

        @method('PUT')

   

         <div class="row">

         <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Nom:</strong>

                <input type="text" name="nom" class="form-control" placeholder="Nom">

            </div>

            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Tipus:</strong>

                <input type="text" name="tipus" class="form-control" placeholder="Tipus">

            </div>

            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Descripcio:</strong>

                <textarea class="form-control" style="height:150px" name="descripcio" placeholder="Descripcio"></textarea>

            </div>

            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Nivell:</strong>

                <input type="number" name="nivell" class="form-control" placeholder="Nivell">

            </div>

            <div class="col-xs-12 col-sm-12 col-md-12 text-center">

              <button type="submit" class="btn btn-primary">Envia</button>

            </div>

        </div>

   

    </form>

@endsection