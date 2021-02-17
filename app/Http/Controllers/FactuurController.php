<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Reservering;
use App\Models\Auto;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use carbon\carbon;

class FactuurController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user_id = Auth::id();
        $factuurs = DB::table('reserverings')
            ->join('autos', 'autos.id', '=', 'reserverings.auto_id')
            ->join('users', 'users.id', '=', 'reserverings.user_id')
            ->select('autos.merk', 'autos.kenteken', 'autos.type', 'autos.prijs_per_dag','users.name', 'users.adress', 'users.zip_code', 'users.city','users.phone_number', 'reserverings.begintijd', 'reserverings.eindtijd')
            ->where('reserverings.user_id', $user_id)
            ->get();


        return view('user.factuur', compact('factuurs'));

    }
//->find(Auth::id(), 'user_id');



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
    public function show( $id )
    {



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
