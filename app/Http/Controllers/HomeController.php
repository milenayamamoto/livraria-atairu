<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produto;

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
        $novidades = Produto::orderBy('created_at', 'desc')->take(7)->get(); //Carousel Novidades

        return view('home', compact('novidades'));
    }

    // TODO: Carousel Ultimo ano, add no banco e seguir link
    // public function carouselUltimoAno()
    // {
    //     https://www.nytimes.com/2019/11/22/books/review/best-books.html
    // }

    // TODO: Carousel Mulheres - Pegar lista
    // public function carouselMulheres()
    // {
    // }

    public function contato()
    {
        return view('contato');
    }
    public function sobre()
    {
        return view('sobre');
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
}
