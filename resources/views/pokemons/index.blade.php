@extends('pokemons.layout')

 

@section('content')

    <div class="row">

        <div class="col-lg-12 margin-tb">

            <div class="pull-left">

                <h2>Laravel 5.8 Aplicació CRUD - Grup A</h2>

            </div>

            <div class="pull-right">

                <a class="btn btn-success" href="{{ route('pokemons.create') }}"> Crear Nou Pokemon</a>

            </div>

        </div>

    </div>

   

    @if ($message = Session::get('success'))

        <div class="alert alert-success">

            <p>{{ $message }}</p>

        </div>

    @endif

   

    <table class="table table-bordered">

        <tr>

            <th>Numero</th>

            <th>Nom</th>

            <th>Tipus</th>

            <th>Descripcio</th>

            <th>Nivell</th>

            <th width="280px">Action</th>

        </tr>

        @foreach ($pokemon as $pokemon)

        <tr>

            <td>{{ ++$i }}</td>

            <td>{{ $pokemon->nom }}</td>

            <td>{{ $pokemon->tipus }}</td>

            <td>{{ $pokemon->descripcio }}</td>

            <td>{{ $pokemon->nivell }}</td>

            <td>

                <form action="{{ route('pokemons.destroy',$pokemon->id) }}" method="POST">

   

                    <a class="btn btn-info" href="{{ route('pokemons.show',$pokemon->id) }}">Mostra</a>

    

                    <a class="btn btn-primary" href="{{ route('pokemons.edit',$pokemon->id) }}">Edita</a>

   

                    @csrf

                    @method('DELETE')

      

                    <button type="submit" class="btn btn-danger">Elimina</button>

                </form>

            </td>

        </tr>

        @endforeach

    </table>

  

    {!! $pokemon->links() !!}

      

@endsection