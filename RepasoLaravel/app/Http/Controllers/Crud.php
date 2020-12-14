<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Crud extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $poet = DB::table('poemas')
            ->orderBy('fName')
            ->get();

        return view('crud.showPoets',[
            'Poeta' => $poet
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('crud.createPoets');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = DB::table('poets')
            ->insert([
                'fName' => $request->input('Nombre'),
                'surname' => $request->input('Apellido'),
                'address' => $request->input('Direccion'),
                'postcode' => $request->input('Codigo postal'),
                'phoneNum' => $request->input('Telefono')
            ]);
        return redirect()->action('Crud@index');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)

    {
    
    $poets = DB::table('poems')
    
    ->where ('id_poet', '=', $id)
    
    ->first();
    
    return view('crud.createpoets', ['poet'=> $poets ]);
    
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
    public function update(Request $request)
    {

        $poet = DB::table('poems')
        
        ->where('id_poet', '=', $request->input('id'))
        
        ->update([
        
            'fName' => $request->input('Nombre'),
            'surname' => $request->input('Apellido'),
            'address' => $request->input('Direccion'),
            'postcode' => $request->input('Codigo postal'),
            'phoneNum' => $request->input('Telefono')
        
        ]);
        
        return redirect()->action('Crud@index')
        
        ->with('status', 'Actualizado exitosamente');
        
        }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = DB::table('usuarios')

        ->where( 'idusuario', 'a', $id)

        ->delete();

    return redirect() ->action('Crud@index')
    ->with ('status', 'Usuario ELiminado');
    }
}
