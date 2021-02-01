<?php
/*Naam: Chenney Chang
  Datum: 22-01-2021
  */


namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Reservering;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Gereserveerd extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Hiervoor zorg ik met inner join dat ik 2 tables met elkaar voeg.
        $data = DB::table('reserverings')
                ->join('autos', 'autos.id', '=', 'reserverings.auto_id')
                ->join('users', 'users.id', '=', 'reserverings.user_id')
                ->select('autos.merk','autos.kenteken', 'users.name', 'reserverings.begintijd', 'reserverings.eindtijd', 'reserverings.id')
                ->get();


        //Hier zorg ik ervoor dat de data te zien is in gereserveerd met een array.
        return view('gereserveerd', compact('data'));
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
     * @param  Reservering  $reservering
     * @return \Illuminate\Http\Response
     */
    //hier zorg ik ervoor dat de array van de reservering verwijderd kan worden.
    public function destroy(Reservering $reservering)
    {
        dd( $reservering->delete());
        return redirect()->route('gereserveerd');
    }

}


