@extends('layouts.app')

@section('title', 'Listar usuários - App-Sistema')

@section('content')
    <x-header-component/>

    <div class="container mt-4">
        <div class="row">
            <div class="col-sm-12 text-center d-flex justify-content-center align-items-center">
                <h1 class="mb-2 mx-5">Lista de Usuários</h1>
                <a href="{{ route('user-create') }}" class="btn btn-success">Novo usuário</a>
            </div>
        </div>
    </div>

    <div class="table-responsive text-center">
        <table class="table table-dark table-striped table-bordered table-hover table-responsive mt-4 mb-4"
               style="width: 800px; margin: 0 auto;">
            <thead class="thead-dark">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nome</th>
                <th scope="col">E-mail</th>
                <th scope="col">Data de cadastro</th>
            </tr>
            </thead>
            <tbody>

            @foreach ($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->created_at->format('d/m/Y H:i:s') }}</td>
                </tr>
            @endforeach

            </tbody>
        </table>
    </div>

    <x-footer-component/>
@endsection
