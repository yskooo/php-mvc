<?php

namespace App\Http\Controllers;

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
}
