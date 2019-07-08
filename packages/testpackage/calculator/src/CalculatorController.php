<?php

namespace Testpackage\Calculator;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class CalculatorController extends Controller
{
    //
     public function multiply($a, $b){
    	//echo $a * $b;
    	
    	$result = $a * $b;
    	return view('calculator::add', compact('result'));
    }
}
