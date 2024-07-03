<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    //

    public function index($id, $name){

        $data = [
            'name' => 'ade',
            'address' => 'moloney street, lagos' ?? ''
        ];
        //return view('register.member', compact('data'));
        return view('register.member', [
            'name' => $data['name'] ?? 'Name '.$name . ' not exist',
            'add' => $id
        ]);
    }
}
