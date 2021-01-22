<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreReserveringRequest;
use App\Models\Auto;
use App\Models\User;
use App\Models\Reservering;
use Illuminate\Http\Request;

class ReserveringController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//        $user = User::find($id);
        $reserverings = Reservering::all();
        return view('reservering.index', compact('reserverings','user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('reservering.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreReserveringRequest $request, User $user)
    {
//        Reservering::$user()->sync($request->user);

        Reservering::create($request->validated());

        return redirect()->route('autos.index');
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
     * @param  reservering $reservering
     * @return \Illuminate\Http\Response
     */
    public function update(StoreReserveringRequest $request, reservering $reservering)
    {
        $reservering->update($request->validated());
                return redirect()->route('reservering.index');
        $request('auto_id');
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
