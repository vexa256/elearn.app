<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Mail;
use App\Mail\WelcomeMail;


class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
       // $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'Profesion' => ['required', 'string'],
            'Nationality' => ['required', 'string'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {

                      $hasher = $data['name'];
                      $data222 = $data['email'];
                      $hasher2 =  Carbon::now();
                      $hasher3 = $hasher2->toDateTimeString();
                      $finalHash= $hasher3.'eac'.$hasher.'eac'.$data222;
                      $UserID = Hash::make($finalHash);



       $user =  User::create([
            'email' => $data['email'],
            'name' => $data['name'],
            'Nationality' => $data['Nationality'],
            'Profesion' => $data['Profesion'],
            'password' => Hash::make($data['password']),
            'UserID' => $UserID,
            'role' => 'USER'
        ]);


         Mail::to($data['email'])->send(new WelcomeMail($user));

        return $user;

        
    }




    public function UpdateAccountForm()
    {
       

            return view('auth.UpdateAccount');




    }


    public function UpdateAccount(Request $request)
    {

                $id = Auth::user()->id;

                $User = User::find($id);

                    $User->Profesion = $request->input('Profesion');
                    $User->Nationality = $request->input('Nationality');
                    $User->password = Hash::make($request->input('password'));
                    $User->email = $request->input('email');
                    $User->name = $request->input('name');
                    $User->save();


                      $data =  "Swal.fire('Successful', 'Your account has been updated successfully, Please log out and login to activate the changes', 'success')";

                     return redirect()->route('home')->with('error_data_custom', $data);

        


    }




}
