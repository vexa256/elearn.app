<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Users;

class UsersController extends Controller
{
   


	public function DeleteUser($id)
	{
		

				$Users = Users::find($id);

				$Users->delete();



				     $data =  "Swal.fire('Successful', 'The User account has been updated successfully, You can now manage all the users in the system from this interface', 'success')";

        		return redirect()->route('ManageUsers')->with('error_data_custom', $data);





	}




		public function ManageUsers()
		{
			
			$Users = Users::where('role', '=', 'USER')->get();



			 $data2 =  "Swal.fire('Successful', 'This interface gives you access to user account management', 'success')";

		   $data = [

					'Users'  => $Users,
					'error_data_custom'  => $data2
				];



				return view('Users.ManageUsers', $data);




		}



		



}
