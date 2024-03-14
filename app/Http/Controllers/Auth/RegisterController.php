<?php

namespace App\Http\Controllers\Auth;
use Hash;
use DB;
use Redirect;
use Input;
use App\User;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Auth;
use App\Mailers\AppMailer;

class RegisterController extends Controller
{
    use RegistersUsers;
    protected $redirectTo = '/home';

    public function __construct()
    {
        $this->middleware('guest');
    }

    function Register(Request $req,AppMailer $mailer){     
        $data = Input::all();                 
        $rules=array(
        'name' => 'required',  
        'email'=>'unique:users', 
        'username' => [ 'required','regex:/^[a-zA-Z0-9]*([a-zA-Z][0-9]|[0-9][a-zA-Z])[a-zA-Z0-9]*$/'],
        'password' => 'min:6|required',
        'password_confirmation' => 'min:6|same:password',
        );
        $valid=Validator::make($data,$rules);
            if($valid->fails()){
                return Redirect::to('/register')->withErrors($valid)->withErrors('email');;
            }
            else{
                $name=$req->input('name');
                $username=$req->input('username');
                $email=$req->input('email');
                $passwords=$req->input('password');
                $repassword=$req->input('repassword');
                $password = Hash::make($passwords);                                                         
                $datas = array(
                    'name' => $name,   
                    'username' => $username,
                    'email' => $email,
                    'password' =>$password,
                    'repassword' =>$repassword
                );
				
				
            }	
			$user=DB::table('users')->insert($data);
			if ($user==true) {			
				 return view('auth/login');
			}	
       
    }
}

