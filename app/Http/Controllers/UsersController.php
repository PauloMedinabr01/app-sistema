<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    /**
     * Exibe a lista de usuários.
     */
    public function index(): View|Application|Factory
    {
        $users = User::all();
        return view('user.user', ['users' => $users]);
    }

    /**
     * Armazena um novo usuário no banco de dados.
     */
    public function store(Request $request): RedirectResponse
    {
        User::create($request->all());

        return redirect()->route('user-index');
    }

    /**
     * Exibe o formulário para criar um novo usuário.
     */
    public function create(): View|Application|Factory
    {
        return view('user.create');
    }

    /**
     * Exibe os detalhes de um usuário específico.
     */
    public function show(string $id)
    {
        // Lógica para exibir os detalhes de um usuário específico.
    }

    /**
     * Exibe o formulário para editar um usuário específico.
     */
    public function edit(string $id)
    {
        // Lógica para exibir o formulário de edição de um usuário específico.
    }

    /**
     * Atualiza as informações de um usuário no banco de dados.
     */
    public function update(Request $request, string $id)
    {
        // Lógica para atualizar as informações de um usuário no banco de dados.
    }

    /**
     * Remove um usuário específico do banco de dados.
     */
    public function destroy(string $id)
    {
        // Lógica para remover um usuário específico do banco de dados.
    }
}
