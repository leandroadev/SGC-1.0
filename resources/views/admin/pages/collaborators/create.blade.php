@extends('admin.layouts.app')

@section('title', 'Cadastro de novo colaborador')

@section('content')
    <h1>Cadastrar novo colaborador</h1>

<form action="{{ route('collaborators.store') }}" method="post">
        @csrf
        <input type="text" name="cpf" placeholder="CPF:">
        <input type="text" name="name" placeholder="Nome:">
        <input type="text" name="email" placeholder="E-mail:">
        <input type="text" name="telephone" placeholder="Telefone:">
        <input type="date" name="birth" placeholder="Data de nascimento:">
        <input type="text" name="address" placeholder="Endereço:">
        <button type="submit">Enviar</button>
    </form>

@endsection
