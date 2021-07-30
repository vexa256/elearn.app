<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Users;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    


		public function AddAdmin(Request $request)
		{
			






    	        $request->validate([
			        
			        'name' => 'required',
			        'email' => 'required',
			        'Profesion' => 'required',
			        'Nationality' => 'required',
			        'password' => 'required',
			       
			      
			    ]);




    	        
    	        		


			     $hasher = $request->input('name');
                      $data222 = $request->input('email');
                      $hasher2 =  Carbon::now();
                      $hasher3 = $hasher2->toDateTimeString();
                      $finalHash= $hasher3.'esssac'.$hasher.'ssss'.$data222;
                      $UserID = Hash::make($finalHash);

			    $Users = new Users;


			    	 $Users->name = $request->input('name');
			    	 $Users->email = $request->input('email');
			    	 $Users->Profesion = $request->input('Profesion');
			    	 $Users->Nationality = $request->input('Nationality');
			    	 $Users->password = $request->input('password');
			    	 $Users->UserID = $UserID;
			    	 $Users->role = 'ADMIN';
			    	 $Users->save();
			    	

			    	  $data =  "Swal.fire('Successful', 'The admin account was created successfully', 'success')";

        		return redirect()->route('ManageAdmins')->with('error_data_custom', $data);




    	        	






		}





		public function ManageAdmins()
		{
			
			$Users = Users::where('role', '=', 'ADMIN')->get();



			

		   $data = [

					'Users'  => $Users
					
				];



				return view('Users.ManageAdmins', $data);




		}



		public function DeleteAdmin($id)
		{
			


			$Users = Users::find($id);

			$Users->delete();


			$data =  "Swal.fire('Successful', 'The admin account was deleted successfully', 'success')";

        		return redirect()->back()->with('error_data_custom', $data);



		}





}
