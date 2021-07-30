<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exams;
use App\Scoreboard;
use App\Courses;
use App\Users;
use App\Certifications;
use Illuminate\Support\Facades\Auth;
use Mail;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {





        $UserID = Auth::user()->UserID;


                $Certifications_c = Certifications::where('UserID', '=',  $UserID)->count();
                $Courses_c = Courses::all()->count();

                $x = $Certifications_c;
                $y = $Courses_c;

                $percent = $x/$y;

                $percent_friendly = number_format( $percent * 100, 2 );


                if ($percent_friendly<25) {
                   

                   $percent_friendly = 25;

                }



            

        


        $data = [



            'Passed' => Scoreboard::where('UserID', '=', $UserID) ->where('Score', '=', 'PASS') ->count(),
            'Failed' => Scoreboard::where('UserID', '=', $UserID) ->where('Score', '=', 'FAIL') ->count(),
            'cert' => Certifications::where('UserID', '=', $UserID) ->count(),
            'Exams_all' => Exams::all() ->count(),
            'TotaleCourse' => Courses::all()->count(),
            'percent_friendly' => $percent_friendly

        ];




            $Admin = [

                    'Users_total' => Users::all()->count(),
                    'UGANDAN' => Users::where('Nationality', '=', 'UGANDAN')->count(),
                    'KENYAN' => Users::where('Nationality', '=', 'KENYAN')->count(),
                    'TANZANIAN' => Users::where('Nationality', '=', 'TANZANIAN')->count(),
                    'BURUNDIAN' => Users::where('Nationality', '=', 'BURUNDIAN')->count(),
                    'Certifications' => Certifications::all()->count(),
                    'Exams' => Exams::all()->count(),
                    'Course' => Courses::all()->count(),



            ];


        $User_D = Auth::user()->role;


            if ($User_D=='ADMIN') {
              

                 return view('home2', $Admin);

            }






        return view('home', $data);
    }
}
