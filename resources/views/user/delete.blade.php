@extends('layouts.app')

@section('title', 'Cadastrar Usuário - App-Sistema')

@section('content')
    <x-header-component/>

    <div class="container mt-4">
        <h1 class="mt-4 text-center">Confirma a exclusão do usuário?</h1>
        <form action="{{ route('user-destroy', ['id' => $users->id]) }}" method="post" class="mx-auto"
              style="max-width: 500px;">
            @csrf
            @method('DELETE')
            <div class="form-group mb-3">
                <div class="form-group mb-3">
                    <label for="name" class="form-label">Nome:</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{$users->name}}"
                           placeholder="Digite o nome..." disabled>
                </div>

                <div class="form-group mb-3">
                    <label for="email" class="form-label">E-mail:</label>
                    <input type="email" class="form-control" id="email" name="email" value="{{$users->email}}"
                           placeholder="Digite o e-mail..." disabled>
                </div>

                <div class="form-group mb-3">
                    <label for="status" class="form-label">Status:</label>
                    <select class="form-control" id="status" name="status" disabled>
                        <option value="ativo" {{ $users->status == 'ativo' ? 'selected' : '' }}>ativo</option>
                        <option value="inativo" {{ $users->status == 'inativo' ? 'selected' : '' }}>inativo</option>
                    </select>
                </div>

                <button type="submit" class="btn btn-danger">Confirma</button>
                <a href="{{ route('user-index') }}" class="btn btn-secondary">Cancelar</a>
            </div>
        </form>
    </div>
    <x-footer-component/>
@endsection
