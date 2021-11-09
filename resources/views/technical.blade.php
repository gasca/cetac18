@extends('layout')
@section('title', 'Bachillerato')
@section('content')
    <h1>Tecnica</h1>    
        <ul>
            @forelse ($carreras as $itemcarrera)
                    <li>{{$itemcarrera['title']}}</li>
                  
              @empty
                  
                <li>No Hay Carreras Dispónibles</li>

            @endforelse

        </ul>
       


@endsection