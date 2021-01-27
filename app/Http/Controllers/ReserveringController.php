<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreReserveringRequest;
use App\Models\Auto;
use App\Models\User;
use App\Models\Reservering;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ReserveringController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($auto_id)
    {
        $reservering = Reservering::with('user','auto')->get();
        $auto = Auto::find($auto_id);
        return view('reservering.index', compact('reservering', 'auto'));
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
    public function store(Request $request)
    {
//            $payload = $request->all();
//            dd($payload);
         $this->attributes['user_id'] = Auth::user()->id;
            $request->validate([
            'begintijd' => 'required',
            'eindtijd' => 'required',
            'auto_id' => 'required'
        ]);


        Reservering::create($request->input());
        return redirect('assortiment');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $auto_id
     * @return \Illuminate\Http\Response
     */
    public function show($auto_id)
    {
        dd($auto_id);
//        return view('reservering.index',['id'=>$auto_id]);
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

//    public function add($auto_id){
////        dd($auto_id);
//    }
}
