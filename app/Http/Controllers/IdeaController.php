<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IdeaController extends Controller
{
    public function generate_idea(Request $request){

        $gender = $request->gender;
        $hungry = $request->hungry;
        $kids = $request->kids;
        $stupid = $request->stupid;
        $weird = $request->weird;
        $age = $request->age;

    }
}
