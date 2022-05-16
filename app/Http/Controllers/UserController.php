<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Requests\FormValidator;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    //
    public function returnView(Request $request){
    
   

        return view('register_user');
    }
    public function saveData(Request $request){

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' =>  $request->password,
            'phoneNumber' => $request->phoneNumber,
            'postalCode' => $request->postalCode,
            'city' => $request->city,
            'district' => $request->district,
            'street' => $request->street,
            'state' => $request->state
        ]);

        return redirect('/welcome')->with('msg','Usuário Cadastrado');

    }
    public function home(Request $request){
    
        return view('welcome');
    }

}
