<?php
/*Naam: Chenney Chang
  Datum: 22-01-2021
  */


namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreGereserveerdRequest;
use App\Models\Reservering;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GereserveerdController extends Controller
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
                ->select('autos.merk','autos.kenteken', 'users.name','users.phone_number', 'reserverings.begintijd', 'reserverings.eindtijd', 'reserverings.id', 'reserverings.status')
                ->get();

        $gereserveerd = Reservering::all();


        //Hier zorg ik ervoor dat de data te zien is in gereserveerd met een array.
        return view('gereserveerd.index', compact('data', 'gereserveerd'));
    }


    public function edit( $gereserveerd_id)
    {
        $reservering = Reservering::find($gereserveerd_id);
        return view('gereserveerd.edit',compact('reservering'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  Reservering  $gereserveerd
     * @return \Illuminate\Http\Response
     */
    public function update(StoreGereserveerdRequest $request, Reservering $gereserveerd)
    {
        $gereserveerd->update($request->validated());
        return redirect('home');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param    Reservering $gereserveerd
     * @return \Illuminate\Http\Response
     */
    //hier zorg ik ervoor dat de array van de reservering verwijderd kan worden.
    public function destroy(Reservering $gereserveerd)
    {

        $data = $gereserveerd->delete();
        return view('index', compact('data'));}

}


