<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function contato()
    {
        return view('contato');
    }

    public function carrinho()
    {
        return view('carrinho');
    }

    public function cadastro()
    {
        return view('cadastro');
    }

    public function faq()
    {
        return view('faq');
    }

    public function sobre()
    {
        return view('sobre');
    }

}
