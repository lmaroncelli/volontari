<?php

namespace App\Http\Controllers\Admin;

use App\Associazione;
use App\Http\Controllers\Admin\AdminController;
use App\Volontario;
use Carbon\Carbon;
use Illuminate\Http\Request;

class VolontariController extends AdminController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    $volontari = Volontario::all();

    return view('admin.volontari.index', compact('volontari'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    $assos = Associazione::all()->pluck('nome', 'id')->toArray();
    $volo = new Volontario;
    return view('admin.volontari.form', compact('volo','assos'));
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
    $volontario = Volontario::create($request->except('data_nascita'));
    $volontario->data_nascita =  Carbon::createFromFormat('d/m/Y', $request->get('data_nascita'));
    $volontario->save();
    return redirect('admin/volontari');  
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
    
    }
}
