<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exams;
use App\Scoreboard;
use App\Courses;
use App\Coounter;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
class ExamsController extends Controller
{
    


			public function UpdateExamLogic($id, Request $request)
			{
				

					$request->validate([

		  'ExamName' => 'required',
		  'Description' => 'required',

                         'qn1' => 'required',
             'qn1op1' => 'required',
			 'qn1op2' => 'required',
			 'qn1op3' => 'required',
			 'qn1op4' => 'required',
			 'qn1ans' => 'required',
			             'qn2' => 'required',
             'qn2op1' => 'required',
			 'qn2op2' => 'required',
			 'qn2op3' => 'required',
			 'qn2op4' => 'required',
			 'qn2ans' => 'required',
			             'qn3' => 'required',
             'qn3op1' => 'required',
			 'qn3op2' => 'required',
			 'qn3op3' => 'required',
			 'qn3op4' => 'required',
			 'qn3ans' => 'required',
			             'qn4' => 'required',
             'qn4op1' => 'required',
			 'qn4op2' => 'required',
			 'qn4op3' => 'required',
			 'qn4op4' => 'required',
			 'qn4ans' => 'required',
			              'qn5' => 'required',
             'qn5op1' => 'required',
			 'qn5op2' => 'required',
			 'qn5op3' => 'required',
			 'qn5op4' => 'required',
			 'qn5ans' => 'required',
			              'qn6' => 'required',
             'qn6op1' => 'required',
			 'qn6op2' => 'required',
			 'qn6op3' => 'required',
			 'qn6op4' => 'required',
			 'qn6ans' => 'required',

			              'qn7' => 'required',
             'qn7op1' => 'required',
			 'qn7op2' => 'required',
			 'qn7op3' => 'required',
			 'qn7op4' => 'required',
			 'qn7ans' => 'required',
			              'qn8' => 'required',
             'qn8op1' => 'required',
			 'qn8op2' => 'required',
			 'qn8op3' => 'required',
			 'qn8op4' => 'required',
			 'qn8ans' => 'required',
			              'qn9' => 'required',
             'qn9op1' => 'required',
			 'qn9op2' => 'required',
			 'qn9op3' => 'required',
			 'qn9op4' => 'required',
			 'qn9ans' => 'required',
			              'qn10' => 'required',
             'qn10op1' => 'required',
			 'qn10op2' => 'required',
			 'qn10op3' => 'required',
			 'qn10op4' => 'required',
			 'qn10ans' => 'required'



        ]);


					$Exams = Exams::find($id);

				                     $Exams->qn1 = $request->input('qn1');
				    $Exams->qn1op1 = $request->input('qn1op1');
				    $Exams->qn1op2 = $request->input('qn1op2');
				    $Exams->qn1op3 = $request->input('qn1op3');
				    $Exams->qn1op4 = $request->input('qn1op4');
				    $Exams->qn1ans = $request->input('qn1ans');

				                        $Exams->qn2 = $request->input('qn2');
				    $Exams->qn2op1 = $request->input('qn2op1');
				    $Exams->qn2op2 = $request->input('qn2op2');
				    $Exams->qn2op3 = $request->input('qn2op3');
				    $Exams->qn2op4 = $request->input('qn2op4');
				    $Exams->qn2ans = $request->input('qn2ans');

				                        $Exams->qn3 = $request->input('qn3');
				    $Exams->qn3op1 = $request->input('qn3op1');
				    $Exams->qn3op2 = $request->input('qn3op2');
				    $Exams->qn3op3 = $request->input('qn3op3');
				    $Exams->qn3op4 = $request->input('qn3op4');
				    $Exams->qn3ans = $request->input('qn3ans');

				                        $Exams->qn4 = $request->input('qn4');
				    $Exams->qn4op1 = $request->input('qn4op1');
				    $Exams->qn4op2 = $request->input('qn4op2');
				    $Exams->qn4op3 = $request->input('qn4op3');
				    $Exams->qn4op4 = $request->input('qn4op4');
				    $Exams->qn4ans = $request->input('qn4ans');

				                        $Exams->qn5 = $request->input('qn5');
				    $Exams->qn5op1 = $request->input('qn5op1');
				    $Exams->qn5op2 = $request->input('qn5op2');
				    $Exams->qn5op3 = $request->input('qn5op3');
				    $Exams->qn5op4 = $request->input('qn5op4');
				    $Exams->qn5ans = $request->input('qn5ans');

				                        $Exams->qn6 = $request->input('qn6');
				    $Exams->qn6op1 = $request->input('qn6op1');
				    $Exams->qn6op2 = $request->input('qn6op2');
				    $Exams->qn6op3 = $request->input('qn6op3');
				    $Exams->qn6op4 = $request->input('qn6op4');
				    $Exams->qn6ans = $request->input('qn6ans');

				                        $Exams->qn7 = $request->input('qn7');
				    $Exams->qn7op1 = $request->input('qn7op1');
				    $Exams->qn7op2 = $request->input('qn7op2');
				    $Exams->qn7op3 = $request->input('qn7op3');
				    $Exams->qn7op4 = $request->input('qn7op4');
				    $Exams->qn7ans = $request->input('qn7ans');

				                        $Exams->qn8 = $request->input('qn8');
				    $Exams->qn8op1 = $request->input('qn8op1');
				    $Exams->qn8op2 = $request->input('qn8op2');
				    $Exams->qn8op3 = $request->input('qn8op3');
				    $Exams->qn8op4 = $request->input('qn8op4');
				    $Exams->qn8ans = $request->input('qn8ans');


				                        $Exams->qn9 = $request->input('qn9');
				    $Exams->qn9op1 = $request->input('qn9op1');
				    $Exams->qn9op2 = $request->input('qn9op2');
				    $Exams->qn9op3 = $request->input('qn9op3');
				    $Exams->qn9op4 = $request->input('qn9op4');
				    $Exams->qn9ans = $request->input('qn9ans');


				                        $Exams->qn10 = $request->input('qn10');
				    $Exams->qn10op1 = $request->input('qn10op1');
				    $Exams->qn10op2 = $request->input('qn10op2');
				    $Exams->qn10op3 = $request->input('qn10op3');
				    $Exams->qn10op4 = $request->input('qn10op4');
				    $Exams->qn10ans = $request->input('qn10ans');



				   
				    $Exams->ExamName = $request->input('ExamName');
				    $Exams->Description = $request->input('Description');
				    $Exams->save();





				     $data =  "Swal.fire('Successful', 'The Exam has been updated successfully, You can now manage all the Exams in the system from this interface', 'success')";

        		return redirect()->route('ManageExams')->with('error_data_custom', $data);






			}


































public function UpdateExam($id)
{
	


		 $c = Coounter::all();

		 $Exams = Exams::find($id);

		 $CourseID = $Exams->CourseID;

		// $Course = Courses::where('CourseID', '=', $CourseID);

		 $data2 =  "Swal.fire('Successful', 'You are updating the Exam ".$Exams->ExamName." that is attached to the course ".$Exams->CourseName."', 'success')";


  			

			$data = [

					'Exam'  => $Exams,
					'counter'  => $c,

					'error_data_custom'  => $data2
				];


				return view('Exams.UpdateExam', $data);



}

    public function DeleteExam($id)
    {
    	

    		$Exams = Exams::find($id);

    		$Exams->delete();


    		$data =  "Swal.fire('Successful', 'The exam was deleted successfully', 'success')";

        			 return redirect()->route('ManageExams')->with('error_data_custom', $data);






    }

   

		public function SelectExams($id)


		{
			$Courses = Courses::find($id);

			$CoursesSelector = $Courses->CourseID;
			$CourseName = $Courses->CourseName;

			$Exams = Exams::where('CourseID', '=', $CoursesSelector)->get();

			$data_mesg =  "Swal.fire(' ".$CourseName."', 'This interface gives you access to exams attached to the course ".$CourseName."', 'success')";


			$data = [

					'Exams'  => $Exams,
					'error_data_custom'  => $data_mesg
				];


				


				return view('Exams.SelectExams', $data);


		}

 



        




	public function AttemptExamForm($id)
	{


			$Exams = Exams::find($id);

			$UserID = Auth::user()->UserID;
			$ExamID = $Exams->ExamID;




			$ScoreboardChecker = Scoreboard::where('UserID', '=', $UserID)
								->where('ExamID', '=', $ExamID)
								->count(); 




				if ($ScoreboardChecker == 0) {
					





       $data2 =  "Swal.fire('Successful', 'You are attempting the Exam ".$Exams->ExamName." that is attached to the course ".$Exams->CourseName."', 'success')";


  			$c = Coounter::all();

			$data = [

					'Exam'  => $Exams,
					'counter'  => $c,
					'error_data_custom'  => $data2
				];


				return view('Exams.AttemptExam', $data);




						} else {


						$data =  "Swal.fire('Error, Exam already attempted!!!!', 'To attempt this exam again, go to scoreboard and select re-attempt exam', 'error')";


							return redirect()->back()->with('error_data_custom', $data);


						}

				}








	public function Reattempt($id)
	{



		     $Scoreboardy = Scoreboard::find($id);
		     $Scoreboardy ->delete();

		  
			
		   



		$data =  "Swal.fire('Successful, Exam data erased', 'To attempt this exam again, go to the exam selection interface , select this exact exam and chose attempt exam', 'success')";


		return redirect()->route('scoreboard')->with('error_data_custom', $data);


						

	}











		

		












		public function CreateExamForm($id)
		{

			$Courses = Courses::find($id);


			 $data2 =  "Swal.fire('Successful', 'You are attaching an exam to the course ".$Courses->CourseName."', 'success')";

			$data = [

					'Course'  => $Courses,
					'error_data_custom'  => $data2
				];

				

				return view('Exams.CreateExamForm', $data);
			
		}



		public function CreateExam(Request $request)
		{


			$request->validate([

		  'CourseName' => 'required',
		  'CourseID' => 'required',
		  'ExamName' => 'required',
		  'Description' => 'required',

                         'qn1' => 'required',
             'qn1op1' => 'required',
			 'qn1op2' => 'required',
			 'qn1op3' => 'required',
			 'qn1op4' => 'required',
			 'qn1ans' => 'required',
			             'qn2' => 'required',
             'qn2op1' => 'required',
			 'qn2op2' => 'required',
			 'qn2op3' => 'required',
			 'qn2op4' => 'required',
			 'qn2ans' => 'required',
			             'qn3' => 'required',
             'qn3op1' => 'required',
			 'qn3op2' => 'required',
			 'qn3op3' => 'required',
			 'qn3op4' => 'required',
			 'qn3ans' => 'required',
			             'qn4' => 'required',
             'qn4op1' => 'required',
			 'qn4op2' => 'required',
			 'qn4op3' => 'required',
			 'qn4op4' => 'required',
			 'qn4ans' => 'required',
			              'qn5' => 'required',
             'qn5op1' => 'required',
			 'qn5op2' => 'required',
			 'qn5op3' => 'required',
			 'qn5op4' => 'required',
			 'qn5ans' => 'required',
			              'qn6' => 'required',
             'qn6op1' => 'required',
			 'qn6op2' => 'required',
			 'qn6op3' => 'required',
			 'qn6op4' => 'required',
			 'qn6ans' => 'required',

			              'qn7' => 'required',
             'qn7op1' => 'required',
			 'qn7op2' => 'required',
			 'qn7op3' => 'required',
			 'qn7op4' => 'required',
			 'qn7ans' => 'required',
			              'qn8' => 'required',
             'qn8op1' => 'required',
			 'qn8op2' => 'required',
			 'qn8op3' => 'required',
			 'qn8op4' => 'required',
			 'qn8ans' => 'required',
			              'qn9' => 'required',
             'qn9op1' => 'required',
			 'qn9op2' => 'required',
			 'qn9op3' => 'required',
			 'qn9op4' => 'required',
			 'qn9ans' => 'required',
			              'qn10' => 'required',
             'qn10op1' => 'required',
			 'qn10op2' => 'required',
			 'qn10op3' => 'required',
			 'qn10op4' => 'required',
			 'qn10ans' => 'required'



        ]);



			      $Exams = new Exams;

				                     $Exams->qn1 = $request->input('qn1');
				    $Exams->qn1op1 = $request->input('qn1op1');
				    $Exams->qn1op2 = $request->input('qn1op2');
				    $Exams->qn1op3 = $request->input('qn1op3');
				    $Exams->qn1op4 = $request->input('qn1op4');
				    $Exams->qn1ans = $request->input('qn1ans');

				                        $Exams->qn2 = $request->input('qn2');
				    $Exams->qn2op1 = $request->input('qn2op1');
				    $Exams->qn2op2 = $request->input('qn2op2');
				    $Exams->qn2op3 = $request->input('qn2op3');
				    $Exams->qn2op4 = $request->input('qn2op4');
				    $Exams->qn2ans = $request->input('qn2ans');

				                        $Exams->qn3 = $request->input('qn3');
				    $Exams->qn3op1 = $request->input('qn3op1');
				    $Exams->qn3op2 = $request->input('qn3op2');
				    $Exams->qn3op3 = $request->input('qn3op3');
				    $Exams->qn3op4 = $request->input('qn3op4');
				    $Exams->qn3ans = $request->input('qn3ans');

				                        $Exams->qn4 = $request->input('qn4');
				    $Exams->qn4op1 = $request->input('qn4op1');
				    $Exams->qn4op2 = $request->input('qn4op2');
				    $Exams->qn4op3 = $request->input('qn4op3');
				    $Exams->qn4op4 = $request->input('qn4op4');
				    $Exams->qn4ans = $request->input('qn4ans');

				                        $Exams->qn5 = $request->input('qn5');
				    $Exams->qn5op1 = $request->input('qn5op1');
				    $Exams->qn5op2 = $request->input('qn5op2');
				    $Exams->qn5op3 = $request->input('qn5op3');
				    $Exams->qn5op4 = $request->input('qn5op4');
				    $Exams->qn5ans = $request->input('qn5ans');

				                        $Exams->qn6 = $request->input('qn6');
				    $Exams->qn6op1 = $request->input('qn6op1');
				    $Exams->qn6op2 = $request->input('qn6op2');
				    $Exams->qn6op3 = $request->input('qn6op3');
				    $Exams->qn6op4 = $request->input('qn6op4');
				    $Exams->qn6ans = $request->input('qn6ans');

				                        $Exams->qn7 = $request->input('qn7');
				    $Exams->qn7op1 = $request->input('qn7op1');
				    $Exams->qn7op2 = $request->input('qn7op2');
				    $Exams->qn7op3 = $request->input('qn7op3');
				    $Exams->qn7op4 = $request->input('qn7op4');
				    $Exams->qn7ans = $request->input('qn7ans');

				                        $Exams->qn8 = $request->input('qn8');
				    $Exams->qn8op1 = $request->input('qn8op1');
				    $Exams->qn8op2 = $request->input('qn8op2');
				    $Exams->qn8op3 = $request->input('qn8op3');
				    $Exams->qn8op4 = $request->input('qn8op4');
				    $Exams->qn8ans = $request->input('qn8ans');


				                        $Exams->qn9 = $request->input('qn9');
				    $Exams->qn9op1 = $request->input('qn9op1');
				    $Exams->qn9op2 = $request->input('qn9op2');
				    $Exams->qn9op3 = $request->input('qn9op3');
				    $Exams->qn9op4 = $request->input('qn9op4');
				    $Exams->qn9ans = $request->input('qn9ans');


				                        $Exams->qn10 = $request->input('qn10');
				    $Exams->qn10op1 = $request->input('qn10op1');
				    $Exams->qn10op2 = $request->input('qn10op2');
				    $Exams->qn10op3 = $request->input('qn10op3');
				    $Exams->qn10op4 = $request->input('qn10op4');
				    $Exams->qn10ans = $request->input('qn10ans');



				    $Exams->CourseName = $request->input('CourseName');
				    $Exams->CourseID = $request->input('CourseID');
				    $Exams->ExamName = $request->input('ExamName');
				    $Exams->Description = $request->input('Description');


				      $hasher =  $request->input('ExamName');
			          $hasher2 =  Carbon::now();
			          $hasher3 = $hasher2->toDateTimeString();
			          $finalHash= $hasher3.'eac'.$hasher;
			          $Exams->ExamID = Hash::make($finalHash);
			          $Exams->save();



			            $data =  "Swal.fire('Successful', 'The Exam has been created successfully, You can now manage all the Exams in the system from this interface', 'success')";

        		return redirect()->route('ManageExams')->with('error_data_custom', $data);



			
		}




		public function ManageExams()
		{
			
			$Exams = Exams::all();

			$data = [

					'Exams'  => $Exams
				];


				return view('Exams.ManageExams', $data);


		}







}
