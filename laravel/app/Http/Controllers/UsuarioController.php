<?php

namespace BodegaOnline\Http\Controllers;

/*Codigo agreegado*/
use Session;
use Redirect;
use BodegaOnline\Http\Requests\CreateUser;
//use BodegaOnline\Http\Requests\UserUpdateRequest;
use Illuminate\Routing\Route;
use BodegaOnline\User;
/**************************/
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
	 
	public function __construct(){
		$this->middleware('auth');		
	}
    public function index()
    {
        //$users=User::All(); //Todos
		//$users=User::onlyTrashed()->paginate(2);
        //para mostrar por paginacion
		$users=User::paginate(2);
		return view('Usuario.index',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Usuario.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateUser $request)
    {
		/* Camino Largo
        User::create([
			'name'=>$request['name'],
			'email'=>$request['email'],
			//'password'=>bcrypt($request['password']),
			'password'=>$request['password'],
		])*/;
		User::create($request->all());
		Session::flash('message','Usuario Creado');
		return redirect('Usuario');
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
        $user=User::find($id);
		return view('Usuario.edit',['user'=>$user]);
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
        $user=User::find($id);
		$user->fill($request->all());
		$user->save();
		Session::flash('message','Usuario Editado');
		return Redirect::to('/Usuario');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //destroy limina de la base de datos
		//User::destroy($id);
		//delete sirve para dejarel registro inactivo con soft deleting
		$user=User::find($id);
		$user->delete();
		Session::flash('message','Usuario Eliminado');
		return Redirect::to('/Usuario');
    }
}
