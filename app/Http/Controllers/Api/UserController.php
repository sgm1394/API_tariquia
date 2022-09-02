<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\User;
use Illuminate\Support\Facades\Hash;


class UserController extends Controller
{


    public function index()
    {
        $users=User::all();
        return view('admin.usuarios.index',compact('users'));
        // return User::all();
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.usuarios.create');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreInventarioRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request-> validate([
            'ci' => 'required',
            'name' => 'required',
            'lastname' => 'required',
            'f_n' => 'required',
            'genero' => 'required',
            'id_rol' => 'required',
            'id_carrera' => '',
            'id_materia' => '',
            'username' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|confirmed',
        ]);
        $user = new User();
        $user->ci = $request->ci;
        $user->name = $request->name;
        $user->lastname = $request->lastname;
        $user->f_n = $request->f_n;
        $user->id_rol = $request->id_rol;
        $user->id_carrera = $request->id_carrera;
        $user->id_materia = $request->id_materia;
        $user->username = $request->username;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);


        $user-> save();
        dd($request);
        return redirect()->route('admin.usuarios.index');
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Inventario  $inventario
     * @return \Illuminate\Http\Response
     */
    public function show(User $usuario)
    {
        // return view('admin.usuarios.show',compact('inventario'));
        User::find($usuario);
        return $usuario;
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Inventario  $inventario
     * @return \Illuminate\Http\Response
     */
    public function edit(Inventario $inventario)
    {
        return view('admin.usuarios.edit', compact('inventario'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateInventarioRequest  $request
     * @param  \App\Models\Inventario  $inventario
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateInventarioRequest $request, Inventario $inventario)
    {
        $inventario->update($request->all());
        return redirect()->route('admin.usuarios.index')->with('info', 'La inventario se actualizo con exito');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Inventario  $inventario
     * @return \Illuminate\Http\Response
     */
    public function destroy(Inventario $inventario)
    {
        $inventario->delete();
        return redirect()->route('admin.usuarios.index');
    }

    public function register(Request $request){

        $request-> validate([
            'ci' => 'required',
            'name' => 'required',
            'lastname' => 'required',
            'f_n' => 'required',
            'genero' => 'required',
            'id_rol' => 'required',
            'id_carrera' => '',
            'id_materia' => '',
            'username' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|confirmed',
        ]);
        $user = new User();
        $user->ci = $request->ci;
        $user->name = $request->name;
        $user->lastname = $request->lastname;
        $user->f_n = $request->f_n;
        $user->id_rol = $request->id_rol;
        $user->id_carrera = $request->id_carrera;
        $user->id_materia = $request->id_materia;
        $user->username = $request->username;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);


        $user-> save();

        return response()->json([
            "status" => 1,
            "msg" => 'Registro de usuario exitoso',
        ]);



    }

    public function login(Request $request){
        $request-> validate([
            'username' => 'required',
            'password' => 'required',
        ]);
        $user = User::where("username","=", $request->username)->first();

        if ( isset( $user->id) ) {
            if(Hash::check($request->password, $user->password)){
                //creamos el token
                error_log('entrando');
                $token= $user->createToken("auth_token")->plainTextToken;
                //si esta todo ok
                return response()->json([
                    "status" => 1,
                    "msg" => 'Usuario logueado exitosamente',
                    "access_token" => $token
                ]);
            }else{
                return response()->json([
                    "status" => 0,
                    "msg" => 'El password es incorrecto',
                ], 404 );
            }
        }else{
            return response()->json([
                "status" => 0,
                "msg" => 'Usuario no registrado',
            ], 404 );
        }

    }
    public function userProfile(){
        return response()->json([
            "status" => 0,
            "msg" => "Acerca del perfil de usuario",
            "data" => auth()->user()
        ]);

    }
    public function logout(){
        auth()->user()->tokens()->delete();

        return response()->json([
            "status" => 1,
            "msg" => "Cierre de Sesión",
        ]);
    }


}
