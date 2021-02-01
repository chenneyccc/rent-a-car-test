<?php
/*Naam: Chenney Chang
  Datum: 22-01-2021
  */

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Gate;
use App\Models\Role;

use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    //hier controleer ik als de user is ingelogd is of niet.
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //hier geef ik aan om alle rows uit de users table vrij te geven.
        $users = User::all();
        return view('admin.users.index')->with('users',$users);
    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */

    /*Met de if-statement zorg ik ervoor dat als de user geen admin is, dan wordt hij teruggestuurd de edit pagina.
    Daarna zorg ik ervoor dat alle rows uit de role tables worden vrij gegeven en gestuurd worden naar de edit pagina. */

    public function edit(User $user)
    {

        if (Gate::denies('edit-users')){
            return redirect(route('admin.users.index'));
        }

        $roles = Role::all();

        //Hiervoor zorg ik ervoor dat
        return view('admin.users.edit')->with([
            'user' => $user,
            'roles' => $roles
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    /*Als de user een role krijgt wordt er een verzoek gestuurd naar roles om het up te daten als dat is gelukt,
      wordt de user terug gestuurd naar de pagina */
    public function update(Request $request, User $user)
    {
        $user->roles()->sync($request->roles);

        return redirect() -> route( 'admin.users.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */

    /* Met de if-statement zorg ik ervoor dat als de user geen admin is, dan wordt hij teruggestuurd de edit pagina.
       Hier zorg ik er ook voor dat de user losgekoppeld wordt aan de rol die de user heeft, zodat hij hem kan verwijderen
       indien dat nodig is */
    public function destroy(User $user)
    {

        if (Gate::denies('delete-users')){
            return redirect()-> route('admin.users.index');
        }
        $user->roles()->detach();
        $user->delete();

        return redirect()->route('admin.users.index');
    }
}
