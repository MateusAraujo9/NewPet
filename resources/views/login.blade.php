@extends('layouts.default')

@section('title', 'Login NewPet')
    
@section('content')
    @if (session('warning'))
        <script>
            alert('{{ session("warning")}}');
        </script>
    @endif

    <form method="POST">
        @csrf
        <input type="email" name="email" placeholder="Digite um e-mail"><br>
        <input type="password" name="password" placeholder="Digite sua senha"><br>

        <input type="submit" value="Entrar">
    </form>    


@endsection