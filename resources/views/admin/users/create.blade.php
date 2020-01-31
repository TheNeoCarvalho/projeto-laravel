@extends('adminlte::page')

@section('title', 'Painel Administrativo')

@section('content_header')
    <h1>Novo Usuário</h1>
@endsection

@section('content')
    <form class="form-horizontal" method="POST" action="{{ route('users.store') }}">

        <div class="form-group row">
            <label for="name" class="col-sm-2 col-lg-1 col-form-label">Nome</label>
            <div class="col-sm-10">
                <input type="text" placeholder="Informe seu nome completo" class="form-control col-lg-4" id="name">
            </div>
        </div>
        <div class="form-group row">
            <label for="email" class="col-sm-2 col-lg-1 col-form-label">Email</label>
            <div class="col-sm-10">
                <input type="email" placeholder="seu@email.com" class="form-control col-lg-4" id="email">
            </div>
        </div>
        <div class="form-group row">
            <label for="password" class="col-sm-2 col-lg-1 col-form-label">Senha</label>
            <div class="col-sm-10">
                <input type="password" class="form-control col-sm-4 col-lg-4" id="password">
            </div>
        </div>
        <div class="form-group row">
            <label for="password_confirmation" class="col-sm-2 col-lg-1 col-form-label">Confirmar Senha</label>
            <div class="col-sm-10">
                <input type="password" class="form-control col-sm-4 col-lg-4" id="password_confirmation">
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-2 col-lg-1" ></div>
            <div class="col-sm-10 col-md-4">
                <button type="submit" class="btn btn-primary col-sm-4 col-md-8 col-lg-4"><i class="fa fa-save"></i> Salvar Usuário</button>
            </div>
        </div>

    </form>
@endsection
