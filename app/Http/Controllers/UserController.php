<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index(){

        $data = User::all();

        return view('dataUser',compact('data'));
    }

    public function create(){

        return view('createUser');
    }

    public function insert(Request $request){
        
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'role' => 'required',
        ]);

        
        
        $data = new User;
        $password = Hash::make($request->password);
        
        $data->name = $request->name;
        $data->email = $request->email;
        $data->password = $password;
        $data->role = $request->role;
        $data->save();

        
        return redirect()->route('/')->with('success','User Has Been Created!');

    }

    public function edit($id){

        $data = User::find($id);

        return view('editUser',compact('data'));

    }


    public function update(Request $request, $id){

        $data = user::find($id);

        $password = Hash::make($request->password);
        
        $data->name = $request->name;
        $data->email = $request->email;
        $data->password = $password;
        $data->role = $request->role;
        $data->save();

        
        return redirect()->route('/')->with('success','User Has Been Edited!');

    }

    public function delete($id){

        $data = User::where('id',$id)->delete();

        return redirect()->route('/')->with('success','User Has Been Deleted!');
    }

}
