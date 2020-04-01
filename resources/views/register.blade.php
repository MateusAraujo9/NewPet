@extends('layouts.default')

@section('title', 'Cadastro Usuário')
    
@section('content')

    @if ($errors->any())
        <ul>
        @foreach ($errors->all() as $erro)
            <li style="color: red;">{{$erro}}</li>
        @endforeach
        </ul>
    @endif

    <form method="POST">
        @csrf
    <input type="name" name="name" placeholder="Seu Nome" value="{{ old('name')}}"><br>
        <input type="email" name="email" placeholder="Digite um e-mail" value="{{ old('email')}}"><br>
        <input type="password" name="password" placeholder="Digite uma senha"><br>
        <input type="password" name="password_confirmation" placeholder="Confirme a senha"><br>

        <input type="submit" value="Cadastrar">
    </form>

@endsection