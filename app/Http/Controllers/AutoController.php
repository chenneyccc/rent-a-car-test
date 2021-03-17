<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAutoRequest;
use App\Models\Auto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AutoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    //hier selecteer ik alle rows uit de table autos.
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
    /* Hier zorg ik ervoor dat er een request wordt gecreëerd*/
    public function store(StoreAutoRequest $request)
    {
        $path = $request->file('image')->store('images', 's3');




         $auto = Auto::create([
             'url' => Storage::disk('s3')->url($path),
             'merk' => $request->input('merk'),
             'kenteken' =>$request->input('kenteken'),
             'type' =>$request->input('type'),
             'prijs_per_dag' =>$request->input('prijs_per_dag'),
         ]);
         dd($auto);

//        $this->storeImage($auto);
        return redirect()->route('autos.index', compact('auto'));
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

    /*Hier wordt er een request gestuurd om een auto toe te voegen aan de pagina.
        Voldoet de auto aan de eisen dan wordt hij terug gestuurd naar de pagina  */
    public function update(StoreAutoRequest $request, Auto $auto)
    {

        if(request()->has('image')) {
            $auto->update([
                'image' => request()->image->store('image   ','public'),
            ]);
        }

        return redirect()->route('autos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Auto  $auto
     * @return \Illuminate\Http\Response
     */

    /*Hiervoor zorg ik ervoor dat de auto verwijderd wordt en geef ik toestemming om dit door te geven aan de pagina */
    public function destroy(Auto $auto)
    {
        $auto->delete();
       return redirect()->route('autos.index');
    }

//    private function storeImage($path)
//    {
//        if(request()->has('image')) {
//            $path = request()->file('image')->store('images', 's3');
//            $auto = Auto::create(request([
//                'url' => Storage::disk('s3')->url($path)
//                ]);
//
//
//        }
//    }
}
//if($request->hasFile('image'))
//{
//    $destination_path = 'public/img';
//    $image = $request->file('image');
//    $image_name = $image->getClientOriginalName();
//    $request->file('image')->storeAs($destination_path,$image_name);
//
//
//}
