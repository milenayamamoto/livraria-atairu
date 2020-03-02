<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function alterarConta()
    {
        return view('alterarConta');
    }

    public function cadastro()
    {
        return view('cadastro');
    }

    public function carrinho()
    {
        return view('carrinho');
    }

    public function conta()
    {
        return view('conta');
    }

    public function contato()
    {
        return view('contato');
    }

    public function faq()
    {
        return view('faq');
    }

    public function login()
    {
        return view('login');
    }

    public function sobre()
    {
        return view('sobre');
    }
}
