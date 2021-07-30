<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Courses;
use App\CourseNotes;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class CourseController extends Controller
{


		public function DeleteCourseNotes($id)
		{
			

			$CourseNotes = CourseNotes::find($id);
			$CourseNotes->delete();


			 $data =  "Swal.fire('Successful', 'The course notes have been deleted successfully', 'success')";

        			 return redirect()->route('ManageNotes')->with('error_data_custom', $data);



		}


			public function SelectCourse()
			{
				
				$Courses = Courses::all();

				$error_data_custom = "Swal.fire('Hello, Select  course content ', 'Please use the table search to filter the courses', 'success')";

				$data = [

					'Courses'  => $Courses,
					'error_data_custom'  => $error_data_custom
				];


						return view('Courses.SelectCourse', $data);


			}



    

		public function DeleteCourse($id)
		{
			
				$Course = Courses::find($id);

				$Course->delete();


				  $data =  "Swal.fire('Successful', 'The course has been deleted successfully', 'success')";

        			 return redirect()->route('ManageCourse')->with('error_data_custom', $data);





		}





    public function UpdateCourseLogic($id, Request $request)
    {
    	

    	        $request->validate([
			        
			        'CourseName' => 'required',
			        'Description' => 'required',
			      
			    ]);


    	           $Courses = Courses::find($id);


                   $Courses->CourseName = $request->input('CourseName');
				    $Courses->Description = $request->input('Description');

				    $Courses->save();


				      $data =  "Swal.fire('Successful', 'The course has been updated successfully', 'success')";

        			 return redirect()->route('ManageCourse')->with('error_data_custom', $data);





    }





    public function UpdateCourse($id)
    {
    		





    		$Courses = Courses::find($id);




				$data = [

					'Course'  => $Courses
				];



				return view('Courses.UpdateCourse', $data);








    }

    	public function UploadCourseNotes(Request $request)
    	{
    		

    	$request->validate([
             'file_url' => 'required|file|max:20000',
             'NotesName' => 'required',
			 'Description' => 'required',
			 'CourseID' => 'required',
			 'CourseName' => 'required'
        ]);


    	 $fileName = "CourseNotes".time().'.'.request()->file_url->getClientOriginalExtension();
    	 $folderName =  $request->input('CourseName');

         // $request->file_url->storeAs('CourseNotes', $fileName);

          $request->file_url->move(public_path('/uploads'), $fileName);


          $CourseNotes = new CourseNotes;




           $CourseNotes->CourseName = $request->input('CourseName');
           $CourseNotes->file_url = $path = $fileName;
           $CourseNotes->file_title = $path =$fileName;
           $CourseNotes->NotesName = $request->input('NotesName');
           $CourseNotes->CourseID = $request->input('CourseID');
           $CourseNotes->CourseName = $request->input('CourseName');
           $CourseNotes->Description = $request->input('Description');
           $CourseNotes->save();


               		  $data =  "Swal.fire('Successful', 'The course notes has been added to the course ".$folderName." successfully, You can now manage all the course notes in the system from this interface', 'success')";

        			 return redirect()->route('ManageNotes')->with('error_data_custom', $data);



    	}










		public function AddCourseNotesForm($id)
		{
			$Courses = Courses::find($id);

			  $data2 =  "Swal.fire('Successful', 'You are attaching notes to the course ".$Courses->CourseName."', 'success')";

			$data = [

					'Course'  => $Courses,
					'error_data_custom'  => $data2
				];

				

				return view('Courses.AddCourseNotesForm', $data);
		}




		public function CreateCourseForm()
		{
			

			return view('Courses.AddCourse');

			
		}


		public function CreateCourse(Request $request)
		{


			if (!Courses::where('CourseName', '=',  $request->input('CourseName'))->exists()) {


				$request->validate([
			        
			        'CourseName' => 'required',
			        'Description' => 'required',
			      
			    ]);


			      $Courses = new Courses;

				    $Courses->CourseName = $request->input('CourseName');
				    $Courses->Description = $request->input('Description');
				    $Courses->Author = 'EAPHLN';

				      $hasher =  $request->input('CourseName');
			          $hasher2 =  Carbon::now();
			          $hasher3 = $hasher2->toDateTimeString();
			          $finalHash= $hasher3.'eac'.$hasher;
			          $Courses->CourseID = Hash::make($finalHash);
			          $Courses->save();




               		  $data =  "Swal.fire('Successful', 'The course has been created successfully, You can now manage all the courses in the system from this interface', 'success')";

        			 return redirect()->route('ManageCourse')->with('error_data_custom', $data);

				
            
               } else {


               		  $data =  "Swal.fire('Error', 'The course name you selected is already in use, Please asign another course name', 'error')";

        			 return redirect()->route('CreateCourseForm')->with('error_data_custom', $data);
					  



               }
			
					


		}





			public function ManageCourse()
			{
				$Courses = Courses::all();


				$data = [

					'Courses'  => $Courses
				];


				return view('Courses.ManageCourse', $data);
			}







}
