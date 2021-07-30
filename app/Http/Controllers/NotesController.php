<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CourseNotes;
use App\Courses;

class NotesController extends Controller
{


        public function SelectNotes($id)
        {
         

                    $Courses = Courses::find($id);

                 $CourseID =  $Courses->CourseID;

                    $CourseNotes = CourseNotes::where('CourseID', '=', $CourseID)->get();

                        $data = [

                    'CourseNotes'  => $CourseNotes,
                    'Course'  => $Courses->CourseName
                ];


                return view('CourseNotes.SelectNotes', $data);




        }

    
    public function ManageNotes()

    {
    	

    	$CourseNotes = CourseNotes::all();

    	$data = [

					'CourseNotes'  => $CourseNotes
				];


				return view('CourseNotes.ManageNotes', $data);


    }



    function MsViewer($id)
    {
    	
    	$CourseNotes = CourseNotes::find($id);

    	$file = url('/uploads/'.$CourseNotes->file_url);  

    	$data = [

					'file'  => $file,
					'CourseNotes'  => $CourseNotes
				];


				return view('CourseNotes.MsViewer', $data);


    }



    function GoogleViewer($id)
    {
    	
    	$CourseNotes = CourseNotes::find($id);

    	$file = url('/uploads/'.$CourseNotes->file_url);  

    	$data = [

					'file'  => $file,
					'CourseNotes'  => $CourseNotes
				];


				return view('CourseNotes.GoogleViewer', $data);


    }
}
