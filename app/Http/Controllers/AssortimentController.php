<?php

namespace App\Http\Controllers;

use App\Models\Auto;
use App\Models\Reservering;
use Cron\AbstractField;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class AssortimentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    //Hier selecteer ik alle rows uit de table autos
    public function index(Request $request)
    {


//        $begintijd = '2021-01-01';
//        $eindtijd = "2022-01-01";
//        $reservations = Reservering::where('begintijd', '>=', $begintijd)
//            ->where('eindtijd', '<=', $eindtijd)
//            ->get();
//
//        if($request->exists($begintijd, $eindtijd)){

//
//            $reservations = Reservering::where('begintijd', '>=', $begintijd)
//                ->where('eindtijd', '<=', $eindtijd)
//                ->get();
//        }
//        dd($reservations);







//        $autos =     DB::table('autos')
//           ->Join('reserverings', 'reserverings.auto_id', '=', 'autos.id')
//           ->select('autos.id', 'autos.kenteken', 'autos.merk', 'autos.type', 'autos.prijs_per_dag', 'autos.image','reserverings.auto_id')
//           ->get();
//
///             $begintijd = $request->input('begintijd');
//            $eindtijd = $request->input('eindtijd');


        $begintijd = $request->input('begintijd');
        $eindtijd = $request->input('begintijd');
        $reservering = Reservering::whereRaw('(now() between begintijd and eindtijd)')->get();

        dd($reservering);

        $autos = Auto::all();

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

    public function dateSearch(Request $request)
    {
        $begintijd = $request->input('begintijd');
        $eindtijd = $request->input('eindtijd');
        dd($request);
        return view('assortiment.index');
    }
}
