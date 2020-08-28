<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
    	$products = ['Produto 01', 'Produto 02', 'Produto 03'];
    	return $products;
    }

    public function show($id)
    {
    	$product          = new \stdClass; 
    	$product->nome 	  = "Vibrador";
    	$product->tamanho = "15cm"; 
    	return $product->nome;
    }

    public function create()
    {
    	return 'Exibindo form de cadastro';
    }

    public function edit($id)
    {
    	return "Editando produto";
    }

    public function store($id)
    {
    	return "Cadastrando novo produto";
    }

    public function update($id)
    {
    	return "Editando produto " . $id;
    }

    public function destroy($id)
    {
    	return "Deletando produto {$id}";
    }

    public function save()
    {
    	return "Editando produto";
    }
}
