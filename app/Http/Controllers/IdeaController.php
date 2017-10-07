<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Phpml\Classification\SVC;
use Phpml\ModelManager;


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

    //
    public function trainDataSet()
    {
        $datasets = DB::table('datasets')->get();

        $samples = array();
        $categories = array();

        foreach ($datasets as $dataset) {
            $sample = array();
            array_push($sample, $dataset->gender);
            array_push($sample, $dataset->hungry);
            array_push($sample, $dataset->kids);
            array_push($sample, $dataset->age);
            array_push($sample, $dataset->stupid);
            array_push($sample, $dataset->weird);

            array_push($samples, $sample);
            array_push($categories, $dataset->categories);
        }


        $classifier = new SVC();
        $classifier->train($samples, $categories);

        // save classifier
        $filepath = '/model/SVC';
        $modelSaver = new ModelManager();
        $modelSaver->saveToFile($classifier, $filepath);


        return view('testing/testing', compact('samples', 'categories'));
    }
}
