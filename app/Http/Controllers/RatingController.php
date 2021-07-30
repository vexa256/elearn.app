<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Scoreboard;

class RatingController extends Controller
{
    

				public function CourseRating()
	{
					
			

				$Scoreboard = Scoreboard::all();



		    $data = [


				'Scoreboards' => $Scoreboard,
				

			];


			return view('rating.CourseRating', $data);

   }



}
