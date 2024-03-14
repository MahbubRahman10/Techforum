<?php

namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use DB;
use Input;
use Validator;
use Redirect;
use Auth;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    use AuthenticatesUsers;
    protected $redirectTo = '/techforum';
    protected $redirectAfterLogout = '/login';
   
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'logout']);
    }
    
    function log()
    {
        Auth::logout();
        Session::flush();
        return Redirect::to('/techforum');
    } 
	
    function Login(){ 
        $data = Input::all();
        $rules=array(
            'username' => 'required',
            'password' => 'required',
        );
        $valid=Validator::make($data,$rules);
        if($valid->fails()){
            return Redirect::to('/login')->withInput(Input::except('password'))->withErrors($valid);
        }
        else{                                       
            $userdata = array(
            'username' => Input::get('username'),
            'password' => Input::get('password'),
            'verified' => 1
        );
            if (Auth::validate($userdata)) {
                if (Auth::attempt($userdata)) {
                return Redirect::intended('/techforum');
                }
            } 
            else {
                return Redirect::to('login');
            }
                                                    
        }

    }

}
