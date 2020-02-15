@extends('adminlte::page')

@section('title', 'Painel Administrativo')

@section('content_header')

@endsection

@section('content')

    @if($errors->any())
        <div class="alert alert-danger">
            <h5><i class="icon fa fa-ban"></i> Ocorreu o(s) seguinte(s) erro(s):</h5>
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif


    <div class="card">
        <div class="card-header"><h1>Atualizar Usuário</h1></div>
        <div class="card-body">
            <form class="form-horizontal" method="POST" action="{{ route('users.update', [ 'user'=>$user->id]) }}">
                @method('PUT')
                @csrf
                <div class="form-group row">
                    <label for="name" class="col-sm-2 col-form-label">Nome</label>
                    <div class="col-sm-10">
                        <input type="text" name="name"  value="{{ $user->name }}" id="name" class="form-control col-lg-4 @error('email') is-invalid @enderror">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="email" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                        <input type="email" name="email" value="{{$user->email}}" placeholder="seu@email.com" class="form-control col-lg-4 @error('email') is-invalid @enderror" id="email">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="password" class="col-sm-2 col-form-label">Nova Senha</label>
                    <div class="col-sm-10">
                        <input type="password" name="password" class="form-control col-sm-4 col-lg-4 @error('password') is-invalid @enderror" id="password">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="password_confirmation" class="col-sm-2 col-form-label">Confirmar Senha</label>
                    <div class="col-sm-10">
                        <input type="password" name="password_confirmation" class="form-control col-sm-4 col-lg-4 @error('password') is-invalid @enderror" id="password_confirmation">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-12 col-form-label"></div>
                    <div class="">
                        <button type="submit" class="btn btn-primary form-control"><i class="fa fa-save"></i> Salvar Usuário</button>
                    </div>
                </div>

            </form>
        </div>
    </div>

@endsection
