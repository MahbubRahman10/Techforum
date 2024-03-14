<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Blog;
use App\comment;
use Validator;
use Response;
use Illuminate\Support\Facades\Input;
use DB;
use Auth;
use Redirect;

class BlogController extends Controller
{
 
    function blogposts($id){   
		$blog=DB::table('blog_post')->where('id',$id)->first();
		$comment['comment']=DB::table('comments')->where('post_id',$id)->get();
		return view('blogpost',compact('blog'))->with('comment',$comment['comment']);
	}
	
    public function Blogpost()
	{
		$name="Team Techforum";
		$data = Input::all();
		$rules=array(
			'postTitle' => 'required',
			'type' => 'required',
			'postCont' => 'required',
		);
		$valid=Validator::make($data,$rules);
		if($valid->fails()){
			return Redirect::to('question')->withErrors($valid);
		}
		else
		{
			$files = Input::file('image');
			$destinationPath = 'upload';
			$filename = $files->getClientOriginalName();
			$upload_success = $files->move($destinationPath, $filename);
			$blogpost = array(
				'postTitle' => Input::get('postTitle'),
				'type' => Input::get('type'),
				'postCont' => Input::get('postCont'),
				'name' => $name,
				'image'=>$upload_success
			);
			$data=DB::table('blog_post')->insert($blogpost);
			return Redirect::intended('admin/viewpost');	    			
		}
    }
  
}
