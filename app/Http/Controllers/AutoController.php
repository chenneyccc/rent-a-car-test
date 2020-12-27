<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAutoRequest;
use App\Models\Auto;
use Illuminate\Http\Request;

class AutoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $autos = Auto::all();
        return view('autos.index', compact('autos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('autos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAutoRequest $request)
    {
        Auto::create($request->validated());

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
     * @param  Auto  $auto
     * @return \Illuminate\Http\Response
     */
    public function edit(Auto $auto)
    {
        return view('autos.edit', compact('auto'));
    }

    /**
     * Update the specified resource in storage.
     *Hou geluid knop en aan knop tegelijk in
     * @param  \Illuminate\Http\Request  $request
     * @param  Auto  $auto
     * @return \Illuminate\Http\Response
     */
    public function update(StoreAutoRequest $request, Auto $auto)
    {
        $auto->update($request->validated());

        return redirect()->route('autos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Auto  $auto
     * @return \Illuminate\Http\Response
     */
    public function destroy(Auto $auto)
    {
        $auto->delete();
        return redirect()->route('autos.index');
    }
}
