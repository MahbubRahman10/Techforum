<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Admin;
use Validator;
use Response;
use Auth;
use Redirect;
use Illuminate\Support\Facades\Input;
use DB;
use App\Data;



class AdminController extends Controller
{
  

	function home(){

		$visitors=DB::table('visitor')->count();
		$users=5;
		$forum=DB::table('forum')->count();
		$reply=DB::table('reply')->count();
		$total_discussions=$forum+$reply;
		$blog_post=DB::table('blog_post')->count();
		$comments=DB::table('comments')->count();	
		$directory = "../";
		$filecount = 0;
		$files = glob($directory . "*.php");
		if ($files){
			$filecount = count($files);
		}

return view('admin/home')->with('visitors',$visitors)->with('users',$users)->with('total_discussions',$total_discussions)->with('blog_post',$blog_post)->with('comments',$comments)->with('filecount',$filecount);

	}

	function admin(){
		$admin['admin']=DB::table('admin')->get();
		return view('admin/admin')->with('admin',$admin['admin']);	
	}

	function forum(){
		$forum['forum']=DB::table('forum')->get();
		return view('admin/forum-post')->with('forum',$forum['forum']);	
	}
		function comment(){
		$comment['comment']=DB::table('comments')->get();
		$reply['reply']=DB::table('reply')->get();

		return view('admin/viewcomment')->with('comment',$comment['comment'])->with('reply',$reply['reply']);	
	}

		function category(){

		$category['category']=DB::table('category')->get();
		return view('admin/category')->with('category',$category['category']);	
	}

		function blog_post(){
		return view('admin/blog_post');	
	}
 
 	function viewpost(){
 		$posts['posts']=DB::table('blog_post')->get();
		return view('admin/viewpost')->with('posts',$posts['posts']);	
	}
		function users(){
		$users['users']=DB::table('users')->get();	
		return view('admin/viewuser')->with('users',$users['users']);	
	}







    function logadmin(){

         $data = Input::all();

            $rules=array(
                'username' => 'required',
                'password' => 'required',
                );

            $valid=Validator::make($data,$rules);

            if($valid->fails()){

                return Redirect::to('/admin/index')->withInput(Input::except('password'))->withErrors($valid);
            }
            else{

                                           
                                            $userdata = array(
                                            'username' => Input::get('username'),
                                            'password' => Input::get('password')
                                            );
                                            // doing login.
                                            if (Auth::validate($userdata)) {
                                            if (Auth::attempt($userdata)) {
                                            return Redirect::intended('/admin/home');
                                            }
                                            } 
                                            else {
                                            return Redirect::to('admin/index');
                                            }
                                                    

      }

        }




	public function deleteItem(Request $req) {
			Data::find ( $req->id )->delete ();
			return response ()->json ();
		}



			function editpost($id){
				$blog=DB::table('blog_post')->where('id',$id)->first();
				return view('admin/edit-post')->with('blog',$blog);
			}































}
