<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exams;
use App\Scoreboard;
use App\Courses;
use App\Coounter;
use App\Certifications;
use Illuminate\Support\Facades\Auth;
use PDF;

class CertificationsController extends Controller
{
  


		public function Mycertifications()
	{
		

			$UserID = Auth::user()->UserID;

			$Certifications = Certifications::where('UserID', '=', $UserID)->get();




				$data = [

					'Users'  => $Certifications
				];


				return view('certification.Mycertifications', $data);




	}


	public function CertifiedUsers()
	{
		

			$Certifications = Certifications::all();




				$data = [

					'Users'  => $Certifications
				];


				return view('certification.certifiedstudents', $data);




	}


			public function certification()

			{


				$Courses = Courses::all();


				$data = [

					'Courses'  => $Courses
				];


				return view('certification.certification', $data);
			}




			public function PrintCertificate($id)

			{

				    $Courses = Courses::find($id);

					$CourseID = $Courses->CourseID;

					$UserID = Auth::user()->UserID;


					$Scoreboard_Count2 = Scoreboard::where('CourseID', '=', $CourseID)
									->where('UserID', '=', $UserID)
									->count();



									if ($Scoreboard_Count2<1 || $Scoreboard_Count2=='') {

										$data =  "Swal.fire('Error', 'Please attempt and pass all exams attached to this course to certify', 'error')";


							            return redirect()->back()->with('error_data_custom', $data);
										

									}

					


					$Exam_Count = Exams::where('CourseID', '=', $CourseID)->count();

					$Scoreboard_Count = Scoreboard::where('CourseID', '=', $CourseID)
									->where('UserID', '=', $UserID)
									->where('Score', '=', 'PASS')
									->count();


									if ($Exam_Count == $Scoreboard_Count) {




											$Scoreboard_Count = Certifications::where('CourseID', '=', $CourseID)
									->where('UserID', '=', $UserID)
									//->where('Score', '=', 'PASS')
									->count();





										$CertChecker = Certifications::where('CourseID', '=', $CourseID)
																				->where('UserID', '=', $UserID)
																				->count();



											if (!$CertChecker >= 1) {
												

										    $Certifications = new Certifications;

											$Certifications->UserName = Auth::user()->name;
											$Certifications->UserEmail = Auth::user()->email;
											$Certifications->CourseName = $Courses->CourseName;
											$Certifications->Nationality = Auth::user()->Nationality;
											$Certifications->UserID = Auth::user()->UserID;
											$Certifications->CourseID = $Courses->CourseID;
											$Certifications->save();
											

											}



									

										   $data =  "Swal.fire('Success', 'Your certificate is downloading', 'success')";


											$data_mover = [

												'Courses' => $Courses


											];


											$pdf = PDF::loadView('certification.PrintCertificate', $data_mover);

											//return $pdf->download('certification.pdf');
											return $pdf->stream('certification.pdf');

											



							



									} else {



											$data =  "Swal.fire('Error', 'Please attempt and pass all exams attached to this course to certify', 'error')";


							return redirect()->back()->with('error_data_custom', $data);



									}



			}




}
