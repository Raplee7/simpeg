<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function user(){
        $data = User::all();
        // dd($data);
        return view('datauser', compact('data'));
    }

    public function deleteuser($id){
        // $data = User::find($id);
        // $data->delete;
        // dd($data);
        User::where('id', $id)->delete();
        return redirect()->route('user');
    }
    
}

