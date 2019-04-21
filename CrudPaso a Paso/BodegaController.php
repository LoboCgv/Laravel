<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bodega;
use Session;
use Redirect;
use App\Http\Requests\BodegaRequest;
class BodegaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bodegas=Bodega::paginate(5);
		return view('Bodega.index',compact('bodegas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Bodega.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BodegaRequest $request)
    {
        Session::flash('message','Bodega Creada');
		$bodega=Bodega::create([
			'nombreBodega'=>$request['nombreBodega'],
			'direccionBodega'=>$request['direccionBodega'],
	]);
		//id de bodega creado
	/*	$idBodega=$bodega->id;
		//recorrer las bodegas para crear un registro por cada una
		$productos=Producto::all();
		foreach($productos as $producto){
		ProductoBodega::create([
			'idBodega'=>$idBodega,
			'idProducto'=>$producto->id,
			'cantProducto'=>0,
	]);		
	}*/
		return redirect('Bodega');
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
        $bodega=Bodega::find($id);
		return view('Bodega.edit',['bodega'=>$bodega]);
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
        $user=Bodega::find($id);
		$user->fill($request->all());
		$user->save();
		Session::flash('message','Bodega Editado');
		return Redirect::to('/Bodega');
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
