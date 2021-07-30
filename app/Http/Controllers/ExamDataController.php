<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Exams;
use App\Scoreboard;
use Artisan;

class ExamDataController extends Controller
{
      public function MarkExam(Request $request)

			{
				

			 $id = $request->input('id_unique');

			 $Exam_data = Exams::find($id);




			$request->validate([

		  'CourseName' => 'required',
		  'CourseID' => 'required',
		  'ExamName' => 'required',
		  'ExamID' => 'required',
		  'Courserating' => 'required',
		  'CourseComment' => 'required',

			 'qn1ans' => 'required',
		
			 'qn2ans' => 'required',
	
			 'qn3ans' => 'required',
		
			 'qn4ans' => 'required',
	
			 'qn5ans' => 'required',
		
			 'qn6ans' => 'required',

	
			 'qn7ans' => 'required',
		
			 'qn8ans' => 'required',
		
			 'qn9ans' => 'required',
			
			 'qn10ans' => 'required'



        ]);


			 

			$Scoreboard = new Scoreboard;

			$data_1 = 0;
			$data_2 = 0;
			$data_3 = 0;
			$data_4 = 0;
			$data_5 = 0;
			$data_6 = 0;
			$data_7 = 0;
			$data_8 = 0;
			$data_9 = 0;
			$data_10 = 0;
			$score = '';
			



		   


		      if ($Exam_data->qn1ans == $request->input('qn1ans')) {

		      		$data_1=1;
		      	
		      }

		      if ($Exam_data->qn2ans == $request->input('qn2ans')) {

		      		$data_2=1;
		      	
		      }

		      if ($Exam_data->qn3ans == $request->input('qn3ans')) {

		      		$data_3=1;
		      	
		      }


		      if ($Exam_data->qn4ans == $request->input('qn4ans')) {

		      		$data_4=1;
		      	
		      }


		      if ($Exam_data->qn5ans == $request->input('qn5ans')) {

		      		$data_5=1;
		      	
		      }

		      if ($Exam_data->qn6ans == $request->input('qn6ans')) {

		      		$data_6=1;
		      	
		      }

		      if ($Exam_data->qn7ans == $request->input('qn7ans')) {

		      		$data_7=1;
		      	
		      }

		      if ($Exam_data->qn8ans == $request->input('qn8ans')) {

		      		$data_8=1;
		      	
		      }

		      if ($Exam_data->qn9ans == $request->input('qn9ans')) {

		      		$data_9=1;
		      	
		      }
		      if ($Exam_data->qn10ans == $request->input('qn10ans')) {

		      		$data_10=1;
		      	
		      }



         $FinalScore =  $data_1 + $data_2 + $data_3 + $data_4 + $data_5 + $data_6 + $data_7 + $data_8+ $data_9 + $data_10;


         			if ($FinalScore >= 5) {
         				
         				$score = 'PASS';

         			}else {

         				$score = 'FAIL';
         			}


         	 $Scoreboard->CourseName = $request->input('CourseName');
         	 $Scoreboard->UserEmail = $request->input('UserEmail');
         	 $Scoreboard->Courserating = $request->input('Courserating');
         	 $Scoreboard->CourseComment = $request->input('CourseComment');
         	 $Scoreboard->UserID = $request->input('UserID');
         	 $Scoreboard->UserName = $request->input('UserName');
         	 $Scoreboard->Score = $score;
         	 $Scoreboard->Mark = $FinalScore.'0%';
         	 $Scoreboard->CourseID = $request->input('CourseID');
         	 $Scoreboard->ExamName = $request->input('ExamName');
         	 $Scoreboard->ExamID = $request->input('ExamID');
         	 $Scoreboard->save();


         	   $data =  "Swal.fire('You Scored ".$FinalScore."0%', 'You can use this interface to check for further details in relation to your exam scores', 'success')";

        			 return redirect()->route('scoreboard')->with('error_data_custom', $data);


        			 	


			}



			public function cleard()
			{
				

				 Artisan::call('cache:clear');
   				 Artisan::call('view:clear');
   				 Artisan::call('route:cache');
   				 Artisan::call('config:cache');
    
                 return "Cache is cleared";





			}


}
