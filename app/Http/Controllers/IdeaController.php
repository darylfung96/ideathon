<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\URL;
use Phpml\Classification\SVC;
use Phpml\ModelManager;
use Phpml\SupportVectorMachine\Kernel;


class IdeaController extends Controller
{
    private $classifer;

    public function generate_idea(Request $request){

        $gender = $request->gender;
        $hungry = $request->hungry;
        $kids = $request->kids;
        $stupid = $request->stupid;
        $weird = $request->weird;
        $age = $request->age;

        $this->trainDataSet();
        $value = $this->predictDataSet($gender, $hungry, $kids, $stupid, $weird, $age);
        $value = $this->getCategory($value);

        return redirect('/result/')->with('value', $value);
    }


    public function predictDataSet($gender, $hungry, $kids, $stupid, $weird, $age) {
        $sample = array();
        array_push($sample, $gender, $hungry, $kids, $stupid, $weird, $age);
        return $this->classifer->predict($sample);
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


        $this->classifer = new SVC();
        $this->classifer->train($samples, $categories);


        // save classifier
        $filepath = 'model/SVC/svc.model';


        $modelSaver = new ModelManager();
        $modelSaver->saveToFile($this->classifer, $filepath);
    }


    private function getCategory($number) {
        switch($number) {
            case 0:
                return 'Normal';
                break;
            case 1:
                return 'Kinda Normal';
                break;
            case 2:
                return 'Crazy';
                break;
            case 3:
                return 'Batshit Crazy';
                break;
            default:
                return 'Unknown';
        }
    }


    /*  Add to database
     *
     *  BATSHIT CRAZY:
     *          - Create an AI that helps you code
     *          - Create a game with a map based on the whole Winnipeg area
     *          - Create an operating system from scratch
     *          - Create an app that finds people's social media just by looking at their face
     *          - Create an app that can predict your future wife
     *          - Create an augmented reality game
     *
     *
     *  CRAZY:
     *          - Create a clone of Winnipeg Transit App from scratch without their API
     *          - Create an agent that can detect if you are male or female just by looking at your face
     *
     *  KINDA NORMAL:
     *          - Create a flappy bird game
     *          - Create a website that people can see each other hand
     *          - Create a cross platform app that tells you what to do everyday
     *          -
     *
     *  NORMAL:
     *          - Create a text file
     *          - Generate a character
     *
     *
     *
     *
     *
     *
     *
     *
     *
     *
     *
     *
     *
     *
     * */

    private function randomProjectIdeas($number) {
        switch($number) {
            case 0:
        }
    }

}
