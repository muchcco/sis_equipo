<?php

namespace App\Http\Controllers;

use App\Equipologin;

use Illuminate\Http\Request;

class IngresoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $entrega_usuarios = Equipologin::where( [['tipo_reparto', '=', 'entrega'], [ 'flag', '=', 1 ]]  )->get();

        $count_entrega = $entrega_usuarios->count();

        //dd($count_entrega);

        $devolucion_usuarios = Equipologin::where( [['tipo_reparto', '=', 'devolucion'], [ 'flag', '=', 1 ]]  )->get();

        $count_devolucion = $devolucion_usuarios->count();

        //dd($count_devolucion);

        $total_usuarios = Equipologin::get();

        $count_total = $total_usuarios->count();

        //dd($count_total);

        return view('ingreso.index', compact('count_entrega', 'count_devolucion' , 'count_total'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return "create";
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
