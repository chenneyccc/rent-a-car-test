<?php

namespace App\Http\Controllers;

use App\Models\Auto;
use App\Models\Reservering;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AssortimentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    //Hier selecteer ik alle rows uit de table autos
    public function index()
    {
//        $autos = Auto::all();
//
//        $available = DB::table('autos')->select('id')->get();
//        $gereserveerd = DB::table('reserverings')->select('auto_id')->get();

       $autos =     DB::table('autos')
           ->leftJoin('reserverings', 'reserverings.auto_id', '=', 'autos.id')
           ->select('autos.id', 'autos.kenteken', 'autos.merk', 'autos.type', 'autos.prijs_per_dag', 'autos.image','reserverings.auto_id')
           ->get();

        return view('assortiment.index', compact('autos'));
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
