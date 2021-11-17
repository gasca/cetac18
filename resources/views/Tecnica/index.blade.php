@extends('layout')
@section('title', 'Bachillerato')
@section('content')
    <h1>Tecnica</h1>    
        <ul>
            @forelse ($carreras as $itemcarrera)
                    <li><a href="{{ route('tecnica.show', $itemcarrera) }}">
                            {{ $itemcarrera['title'] }}
                        </a>
                    </li><br>
                        <small>{{ $itemcarrera->description }}</small> <br>
                        {{  $itemcarrera
                         ->created_at
                         ->format('Y-m-d') 

                        }}<br>
                        </li>
                        <br>

                        {{-- ->diffForHumans()   en vez de format hace 6 horas 20 --}}

                        {{-- $carreras->links() --}}

              @empty
                  
                <li>No Hay Carreras Dispónibles</li>

            @endforelse

        </ul>
       


@endsection