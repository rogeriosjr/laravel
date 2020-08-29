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

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return "teste";
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        return "Show";
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('admin.pages.products.edit', compact('id'));
        //return 'edit';
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        return 'Update';
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        return 'Destroy';
    }
}
