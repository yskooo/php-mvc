<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;

class UtilController extends Controller
{
    public function product($param1, $param2) {
        Log::info('===== UtilController LOG PRODUCT =====');
        Log::info($param1 . " * " . $param2);
        return $param1 * $param2;
    }

    public function quotient($param1, $param2) {
        Log::info('===== UtilController LOG QUOTIENT =====');
        Log::info($param1 . " / " . $param2);
        return $param1 / $param2;
    }
}
