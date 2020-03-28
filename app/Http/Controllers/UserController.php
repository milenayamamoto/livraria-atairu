<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function index()
    {
        return view('conta');
    }

    public function alteraConta()
    {
        return view('alterarConta');
    }

    public function update(Request $request)
    {
        $id = auth()->user()->id;

        $usuario = User::find($id);
        $usuario->name = $request->input('nome');
        $usuario->email = $request->input('email');
        $usuario->password = bcrypt($request->input('password'));
        $update = $usuario->save();

        if ($update) {
            return redirect()
                ->route('home')
                ->with('success', 'Dados atualizados com sucesso');
        } else {
            return redirect()
                ->back()
                ->with('error', 'Não foi possível alterar os dados. Por favor, tente novamente');
        }
    }

    public function delete()
    {
        $id = auth()->user()->id;

        $usuario = User::find($id);
        $delete = $usuario->delete();
        if ($delete) {
            return redirect()
                ->route('register')
                ->with('success', 'Usuário excluído com sucesso');
        } else {
            return redirect()
                ->back()
                ->with('error', 'Não excluir o usuário. Por favor, tente novamente');
        }
    }
}
