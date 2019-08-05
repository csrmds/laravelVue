<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Artigo;

class ArtigosController extends Controller
{
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index()
	{
		$listaMigalhas= json_encode([
			["titulo"=>"Home","url"=>route('home')],
			["titulo"=>"Lista de Artigos","url"=>""]
		]);

		$listaArtigos= json_encode(
			Artigo::all()
			/*
			[
			["id"=>1, "titulo"=>"PHP OO", "descricao"=>"Cruso PHP Orientado à Objetos", "data"=>"2019-08-10"],
			["id"=>2, "titulo"=>"jQuery", "descricao"=>"sobre a vida do jQuery", "data"=>"2019-07-10"],
			["id"=>3, "titulo"=>"Word", "descricao"=>"Cruso de Microsoft Word", "data"=>"2019-08-23"]
			]*/
		);

		return view('admin.artigos.index',compact('listaMigalhas', 'listaArtigos'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request)
	{
		//dd($request->all());
		$data= $request->all();
		Artigo::create($data);
		return redirect()->back();
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
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function edit($id)
	{
		//
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
	}
}
