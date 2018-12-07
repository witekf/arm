<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\UserType;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $all_users = User::all();
        
        return view('users.users', ['users'=>$all_users]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user_types = UserType::all();
        return view('users.adduser', ['user_types'=>$user_types]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
            $request->validate([
                'login'=>'required|unique:users',
                'name'=>'required',
                'surname'=>'required',
                'password'=>'required'

            ]);
        
            User::create([
            //w ktorym miejscu w bazie z ktorego pla formularza
            'login'=>$request->get('login'),
            'name'=>$request->get('name'),
            'surname'=>$request->get('surname'),
            'password'=>bcrypt($request->get('password')),
            'user_type_id'=>$request->get('user-type')
        ]);

        return redirect('/users');
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
        $user = User::find($id);
        $user_types = UserType::all();
        return view('users.edituser', ['user'=>$user, 'user_types'=>$user_types]);
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
        $request->validate([
            'login'=>'required',
            'name'=>'required',
            'surname'=>'required'
            
        ]);

        $user = User::find($id);

        //z lewej to co w bazie i podstawiamy to co z prawej czyli co w formularzu
        $user->login = $request->get('login');
        $user->name = $request->get('name');
        $user->surname = $request->get('surname');
        $user->user_type_id = $request->get('user-type');
        //poniżej wyjątek dla password: jesli niepuste to nadpisz hasło
        if($request->get('password') != '') {
            $user->password = bcrypt($request->get('password'));
        }   

        $user->save();
        return redirect('/users');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect('/users'); 
    }
}
