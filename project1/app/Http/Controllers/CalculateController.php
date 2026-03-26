<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\UtilController;
use Exception;
use Throwable;

class CalculateController extends Controller
{
    public function index($num1, $num2){

    Log::info('================START INDEX=================');

        $sum = $this->add($num1, $num2);
        Log::info('sum = ' . $sum);

        $difference = $this->difference($num1, $num2);
        Log::critical('difference = ' . $difference);

        $util = new UtilController();
        try {
            $product = $util->product($num1, $num2);
            Log::alert('product = ' . $product);

            $quotient = $util->quotient($num1, $num2);
            Log::emergency('quotient = ' . $quotient);
        } catch (Throwable $e) {
            Log::error('ERROR :' . $e->getMessage());
        }

        $product = $util->product($num1, $num2);
        Log::debug('product = ' . $product);

    Log::info('================END INDEX=================');
        return view('calculate', compact('sum', 'difference', 'product', 'quotient'));
    }

    private function add($param1, $param2){
        return $param1 + $param2;
    }

    public function difference($param1, $param2){
        // throw new Exception ("Something went wrong in the difference method.");

        Log::info($param1 . " - " . $param2);

        return $param1 - $param2;
    }

}
