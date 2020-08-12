@extends('admin.layouts.app')

@section('title', 'Cadastro de novo colaborador')

@section('content')
    <h1>Cadastrar novo colaborador</h1>

<form action="{{ route('collaborators.store') }}" method="post">
        @csrf
        <div class="form-group">
            <input type="text" class="form-control" name="cpf" placeholder="CPF:">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" name="name" placeholder="Nome:">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" name="email" placeholder="E-mail:">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" name="telephone" placeholder="Telefone:">
        </div>
        <div class="form-group">
            <input type="date" class="form-control" name="birth" placeholder="Data de nascimento:">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" name="address" placeholder="Endereço:">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-success">Enviar</button>
        </div>
    </form>

@endsection
