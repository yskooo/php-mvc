<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UtilController extends Controller
{
    public function product($param1, $param2) {
        return $param1 * $param2;
    }

    private function quotient($param1, $param2) {
        return $param1 / $param2;
    }
}
