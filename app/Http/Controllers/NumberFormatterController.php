<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NumberFormatterController extends Controller
{
    public function numFormat(Request $request)
    {
        $numFormat = $request->input('num_format');
        $commas = $request->input('commas');
        $num = $request->input('num');
        $precision = $request->input('precision');
        $currency = $request->input('currency');
        
        $viewName = $numFormat . '-' . ($commas == "true" ? 'true' : 'false') . '-format';
       
        if (view()->exists('formats.' . $viewName)) {
            return view('formats.' . $viewName, compact('num', 'precision', 'currency'));
        } else {
            return "Error Occurred";
        }
    }
}
