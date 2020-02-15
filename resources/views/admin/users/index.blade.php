@extends('adminlte::page')

@section('title', 'Usuários')

@section('content_header')

@endsection

@section('content')
    <div class="card">
        <div class="card-header">
            <h1>Listagem de Usuários
                <a href="{{ route('users.create') }}" class="btn btn-sm btn-dark"><i class="fa fa-plus"></i> adicionar usuário</a>
            </h1>
        </div>
        <div class="card-body">
            <table class="table table-sm table-md table-centered table-hover ">
                <thead>
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
                            <a href="{{ route('users.edit', ['user' => $user->id]) }}" class="btn btn-sm btn-md btn-primary"><i class="fa fa-edit"></i></a>
                            <form class="d-inline" method="post" action="{{ route('users.destroy', ['user' => $user->id]) }}" onsubmit="return confirm('Deseja realmete excluir?')">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-sm btn-md btn-danger"><i class="fa fa-trash"></i></button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>

        </div>
    </div>
    {{ $users->links() }}
@endsection
