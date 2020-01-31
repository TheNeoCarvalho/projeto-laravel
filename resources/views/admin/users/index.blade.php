@extends('adminlte::page')

@section('title', 'Usuários')

@section('content_header')
    <h1>Usuários
        <a href="{{ route('users.create') }}" class="btn btn-sm btn-dark"><i class="fa fa-user"></i> adicionar usuário</a>
    </h1>
@endsection

@section('content')

    <table class="table  table-sm table-md table-centered table-hover ">
        <thead class="thead-dark">
            <tr>
                <th>#</th>
                <th>Nome</th>
                <th>email</th>
                <th>Ações</th>
            </tr>

        </thead>
        <tbody>
        @foreach($users as $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>
                    <a href="{{ route('users.destroy', ['user' => $user->id]) }}" class="btn btn-sm btn-md btn-danger"><i class="fa fa-trash"></i></a>
                    <a href="{{ route('users.edit', ['user' => $user->id]) }}" class="btn btn-sm btn-md btn-primary"><i class="fa fa-edit"></i></a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>


@endsection
