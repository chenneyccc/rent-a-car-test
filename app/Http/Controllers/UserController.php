<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use League\CommonMark\Extension\Attributes\Util\AttributesHelper;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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

    /*Met de if statement authenticeer ik eerst de user. Daarna
     zorg ik ervoor dat hij in de table user zoekt naar de id. Als de id van de user klopt kan de user
     de data veranderen, als de id niet klopt wordt hij teruggestuurd naar de pagina */
    public function edit()
    {
        if(Auth::user()) {
            $user = User::find(Auth::user()->id);

            if ($user) {
                return view('user.edit')->withUser($user);
            } else {
                return redirect()->back();
            }
        } else {
            return redirect()->back();
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    /*Hiervoor zorg ik ervoor dat er in de user table wordt gezocht naar de id van de user en wordt de id vastgesteld.
    met de if- statement zorg ik ervoor dat dat er een request wordt bevestigd daarna zorg ik er voor met een andere
    if- statement dat er er request wordt gestuurd, als de request aan de eisen voldoet wordt de user geupdate */
    public function update(Request $request)
    {
        $user = User::find(Auth::user()->id);

        if ($user) {
            $validate = $request->validate([
                'name' => 'required|min:2',
                'email' => 'required|email|unique:users',

            ]);
        }

        if($user) {
            $user->name = $request['name'];
            $user->email = $request['email'];


            $user->save();

            return redirect()->back();
        } else{
            return  redirect()->back();
        }
    }
    /*Hier geef ik aan om in de table user te gaan zoeken naar de user id, als user id overeenkomt kan de user ze profiel bekijken */
    public function profile($id)
    {
        $user = User::find($id);

        if($user){
            return view('user.profile')->withUser($user);
        }else{
            return redirect()->back();
        }
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
