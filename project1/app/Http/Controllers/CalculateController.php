<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\UtilController;

class CalculateController extends Controller
{
    public function index($num1, $num2){

        $sum = $this->add($num1, $num2);
        $difference = $this->difference($num1, $num2);
        $util = new UtilController();
        $product = $util->product($num1, $num2);
        // $quotient = $util->quotient($num1, $num2);

        // return "<h1>Sum: " . $sum .  "<br/> Difference: " . $difference . "<br/> Product: " . $product . "</h1>";
        return view('calculate', compact('sum', 'difference', 'product'));
    }

    private function add($param1, $param2){
        return $param1 + $param2;
    }

    public function difference($param1, $param2){
        return $param1 - $param2;
    }
}
