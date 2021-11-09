@extends('layout')
@section('title', 'Contacto')
@section('content')
    <h1>Contacto</h1>    
    <form method="POST" action="{{ route('contact')}}">
        <input type="text" name="name" placeholder="Nombre"><br>
        <input type="text" name="email" placeholder="ing.eduardogb@cetac.com"><br>
        <input type="subject" placeholder="Asunto"><br>
        <textarea   name="content" placeholder="Mensaje"></textarea><br>
        <button>Enviar</button>

    </form>

@endsection