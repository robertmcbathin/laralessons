<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;

class CarbonController extends Controller
{
	public function show()
	{
	 $now = Carbon::createFromDate(1992,6,18)->age;
     return view('carbon', [
     	'now' => $now]);
    }
}
