@extends('admin.layouts.app')

@section('title', 'Colaboradores')

@section('content')
    <h1>Exibindo os colaboradores</h1>
    <a href="{{ route('collaborators.create') }}">Cadastrar</a>

    <table>
        <thead>
            <tr>
                <th>CPF</th>
                <th>Nome</th>
                <th>E-mail</th>
                <th>Telefone</th>
                <th>Data de nascimento</th>
                <th>Endereço</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($collaborators as $collaborator)
                <tr>
                    <td>{{ $collaborator->cpf }}</td>
                    <td>{{ $collaborator->name }}</td>
                    <td>{{ $collaborator->email }}</td>
                    <td>{{ $collaborator->telephone }}</td>
                    <td>{{ $collaborator->birth }}</td>
                    <td>{{ $collaborator->address }}</td>
                    <td>
                        <a href="{{ route('collaborators.show', $collaborator) }}">Detalhes</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {!! $collaborators->links() !!} <!--Paginação-->

@endsection
