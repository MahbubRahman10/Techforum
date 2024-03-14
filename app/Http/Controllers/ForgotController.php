<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Reminder;
use Mail;
use Auth;

class ForgotController extends Controller
{

	function forgot(){

		return view('auth.Forgot');
	}
	function PostForgot(Request $request){


			$user=User::whereemail($request->email)->first();

			$reminder=Reminder::exits($user) ?: Reminder::create($user); 

			$this->sendEmail($user,$reminder->code);

	}

	private function sendEmail($user,$code){
		Mail::send('email.forgot-password',[

			'user' => $user,
			'code' => $code

		], function ($message) use ($user){
			$message->to($user->email);

			$message->subject("Hello $user->username,reset your password");
		}
		);
	}

}
