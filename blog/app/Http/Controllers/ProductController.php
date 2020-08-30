<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    protected $request, $user; 

    public function __construct(Request $request)
    {
        $this->request = $request;

        //$this->middleware('auth');
        //$this->middleware('auth')->only('create');
        //$this->middleware('auth')->only(['create', 'store']);
        /*
        $this->middleware('auth')->except('index');
        $this->middleware('auth')->except([
            'index',
            'show'
        ]);
        */
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teste = 123;
        $compact = '<h1>Array de compact</h1>';
        $xss = '<script>alert("Hello Word")</script>';
        $record = '';
        $testeArray = ['TV', 'Computador', 'Celular', 'Tablet'];
        // Primeira maneira de passa variável para view
        /*return view("teste", [
            'teste' => $teste
        ]);*/
        // Segunda maneira de passar variável para view
        return view('admin.pages.products.index', compact('teste', 'compact', 'xss', 'record', 'testeArray'));
    }
}
