<?php

namespace BodegaOnline\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
	//crear constructor para un middleware
	public function __construct(){
		$this->middleware('auth',['only'=>'admin']);		
	}
	 
    public function index()
    {
        return view('index');
    }

	public function contacto(){
		return view('contacto');
	}
	
	public function admin(){
		return view('admin');		
	}
}
