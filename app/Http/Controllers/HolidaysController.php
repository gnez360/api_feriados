<?php

namespace App\Http\Controllers;

use \App\Holidays;
use Illuminate\Http\Request;

class HolidaysController extends Controller
{
    public function index()
    {
     
        $holidays = Holidays::get();
        return response()->json($holidays);
    }

    public function year(Request $request)
    {
        $holidays = Holidays::where('year', $request->year);

    }

    public function uf(Request $request)
    {
   
        $holidays = Holidays::where('initials', $request->uf)->get();

      
        return response()->json($holidays);
    }
}
