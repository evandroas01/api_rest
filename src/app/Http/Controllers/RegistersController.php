<?php

namespace App\Http\Controllers;

use App\Register;
use Illuminate\Http\Request;

class RegistersController extends Controller
{

    public function index()
    {

        return Register::all();

    }

    public function addRegister(Request $request)
    {

        $request->validate([
            'name'=>'required|max:255',
            'age'=>'required|integer'
        ]);

        $register = Register::create([
            'name'=>$request->input('name'),
            'age'=>$request->input('age'),
            'email'=>$request->input('email')
        ]);

        return $register;

    }

    public function show(Register $register)
    {

        return $register;

    }

    public function update(Request $request, Register $register)
    {

        $register->name = $request->input('name');
        $register->age =  $request->input('age');
        $register->email = $request->input('email');

        $register->save();

        return $register;

    }

    public function delete(Register $register)
    {

        $register->delete();

        return response()->json(['success'=>true]);

    }

}
