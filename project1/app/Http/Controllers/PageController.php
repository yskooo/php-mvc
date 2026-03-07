<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function welcome() {
        return view('welcome');
    }

    public function home($id, $name) {
        return "<marquee><h1>This is Home Page $id $name</h1></marquee>";
    }

    public function about($id, $name) {
        return "<a href='". route('home', ['id'=>$id, 'name'=>$name]) ."'>Go to Home</a>";
    }

    public function contact() {
        return "This is contact";
    }

    public function fallback() {
        return '<img src="/notfound.jpg">';
    }
}
