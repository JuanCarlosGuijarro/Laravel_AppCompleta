<?php

namespace App\Http\Controllers;

use App\Models\Foto;
use App\Models\User;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;

class AdminUsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $users=User::all();

        return view('admin.users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        /*User::create($request->all());

        return redirect('/admin/users');*/


        $entrada=$request->all();

        if($archivo=$request->file('foto_id')) {

            $nombre=$archivo->getClientOriginalName();

            $archivo->move('images', $nombre);

            $foto=Foto::create(['ruta_foto'=>$nombre]);

            $entrada['foto_id']=$foto->id;

        
        }

        $entrada['password']=bcrypt($request->password);

        User::create($entrada);

        return redirect('admin/users');
    
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

        $user=User::findOrFail($id);

        return view('admin.users.edit', compact('user'));
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

        $user=User::findOrFail($id);

        $entrada=$request->all();

        if($archivo=$request->file('foto_id')) {

            $nombre=$archivo->getClientOriginalName();

            $archivo->move('images', $nombre);

            $foto=Foto::create(['ruta_foto'=>$nombre]);

            $entrada['foto_id']=$foto->id;
        
        }

        $user->update($entrada);

        return redirect('/admin/users');
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
//
        $user=User::findOrFail($id)->delete();

        Session::flash('usuario_borrado', 'El usuario ha sido eliminado con éxito');

        return redirect('/admin/users');

    }
}
