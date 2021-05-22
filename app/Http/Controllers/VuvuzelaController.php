<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VuvuzelaController extends Controller
{
    //
    public function vuvuzela(Request $request)
    {


        // A function to add two user input
        // getting and validating the data
        $data = $request->validate([
            'a'=>'required',
            'b'=>'required',
        ]);
        // adding the two user variable
        return array_sum($data);
    }
}
