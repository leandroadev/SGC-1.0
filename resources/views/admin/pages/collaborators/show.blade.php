@extends('admin.layouts.app')

@section('title', "Detalhes do colaborador {$collaborator->name}")

@section('content')

<h1>Colaborador {{ $collaborator->name }} <a href="{{ route('collaborators.index') }}"><<</a></h1>

<ul>
    <li><strong>CPF: </strong>{{ $collaborator->cpf }}</li>
    <li><strong>Nome: </strong>{{ $collaborator->name }}</li>
    <li><strong>E-mail: </strong>{{ $collaborator->email }}</li>
    <li><strong>Telefone: </strong>{{ $collaborator->telephone }}</li>
    <li><strong>Data de nascimento: </strong>{{ $collaborator->birth }}</li>
    <li><strong>Endereço: </strong>{{ $collaborator->address }}</li>
</ul>

@endsection
