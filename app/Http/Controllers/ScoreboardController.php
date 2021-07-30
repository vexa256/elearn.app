<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Scoreboard;
use Illuminate\Support\Facades\Auth;


class ScoreboardController extends Controller
{
    


			public function scoreboard()
			{
				


				$User_data = Auth::user()->UserID;

				$Scoreboard = Scoreboard::where('UserID', '=', $User_data)->get();



		    $data = [


				'Scoreboards' => $Scoreboard,
				

			];


			return view('Scoreboard.Scoreboard', $data);





			}



}
