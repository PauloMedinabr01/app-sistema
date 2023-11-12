@extends('layouts.app')

@section('title', 'Cadastrar Usuário - App-Sistema')

@section('content')
    <x-header-component/>

    <div class="container mt-4">
        <h1 class="mt-4 text-center">Cadastrar Usuário</h1>
        <form action="{{ route('user-store') }}" method="post" class="mx-auto" style="max-width: 500px;">
            @csrf
            <div class="form-group mb-3">
                <div class="form-group mb-3">
                    <label for="name" class="form-label">Nome:</label>
                    <input type="text" class="form-control" id="name" name="name"
                           placeholder="Digite o nome..." required autofocus>
                </div>

                <div class="form-group mb-3">
                    <label for="email" class="form-label">E-mail:</label>
                    <input type="email" class="form-control" id="email" name="email"
                           placeholder="Digite o e-mail..." required>
                </div>

                <div class="form-group mb-3">
                    <label for="password" class="form-label">Senha:</label>
                    <input type="password" class="form-control" id="password" name="password"
                           placeholder="Digite a senha..." required>
                </div>

                <button type="submit" class="btn btn-success">Cadastrar</button>
                <button type="reset" class="btn btn-secondary">Limpar</button>
            </div>
        </form>
    </div>
    <x-footer-component/>
@endsection
