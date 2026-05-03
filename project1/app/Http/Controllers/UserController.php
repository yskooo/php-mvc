<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function indexUserById($id){
        return "<h1>User Page $id</h1>";
    }

    public function addUserById($id){
        return "<h1>User Page Add $id</h1>";
    }

    public function deleteUserById($id){
        return "<h1>User Page Delete $id</h1>";
    }

    public function editUserById($id){
        return "<h1>User Page Edit $id</h1>";
    }


    public function store(Request $request){
        $request->validate([
            'first_name' => ['required','max:10'],
            'middle_name' => ['max:10'],
            'last_name' => ['required','max:10'],
            'email' => ['required', 'ends_with:@iskolarngbayan.pup.edu.ph']
        ],
            [
                'last_name.required' => 'Lagyan mo po ng apelyido.',
            ]
        );
        Log::info('================START STORE=================',[
            'first_name' => $request->first_name,
            'middle_name' => $request->middle_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
        ]);
    }

    public function form (){
        return view('user');
    }

    public function submit($id){
        return "User with ID $id has been submitted.";
}

    public function edit($id){
        return "User with ID $id is being edited.";
    }
}
