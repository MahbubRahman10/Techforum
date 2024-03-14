<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Session;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use DB;
use Input;
use Validator;
use Redirect;
use Auth;
use Carbon\Carbon;
use View;
use App\Data;

class controllertechforum extends Controller
{
	function Forumpost(){
		$data['data'] = DB::table('forum')->orderBy('id', 'desc')->paginate(7);	    	
		return view::make('techforum',$data);     
	}
	function Category(){
		$category['category'] = DB::table('category')->get();	    	
		if(count($category) > 0)
		{
			return view('sections/nav',$category);
		}
		else{
			return view('form');
		}	    
	}	
	function viewcategory($id){	
		 $category=DB::table('category')->where('category_id',$id)->first();
		 $category_name=$category->category_name;
		 $data['data']=DB::table('forum')->where('category',$category_name)->get();
		 return view('category',compact('category'),$data)->with('id',$id);
	}

	function viewpost($id){
		$viewerip = \Request::ip();
		$data = DB::table('postvisitor')->where([['post_id', '=', $id], ['visitor_ip', '=', $viewerip],])->get();
		if(count($data) == 0)
		{
			$ip=array("post_id"=>$id,"visitor_ip"=>$viewerip);
			$userip=DB::table('postvisitor')->insert($ip);
			if(count($userip) > 0)
			{
				$view=DB::table('forum')->increment('visitor', 1);
			}
		}
		$iid=DB::table('forum')->where('id',$id)->first();
		$comment['comment']=DB::table('reply')->where('forum_post_id',$id)->get();
		$relat=$iid->category;
		$related['related'] = DB::table('forum')->where([['category', '=', $relat], ['id', '!=', $id],])->get();   	     
		return view('viewpost',compact('iid'),$comment)->with('related',$related['related']);
	}

	function forumreply($id)
	{
		$userid = Auth::user()->id;
		$user=DB::table('users')->where('id',$userid)->first();
		$name=$user->name;
		$data = Input::all();
		$rules=array( 'description' => 'required',);
		$valid=Validator::make($data,$rules);
		if($valid->fails()){	    			
			return redirect::to('viewpost='.$id)->withErrors($valid);
		}
		else
		{
			$description = array(
			'description' => Input::get('description'),
			'forum_post_id' => $id,
			'name' => $name,
			);
			$data=DB::table('reply')->insert($description);
			if ($data==true) {

				$view=DB::table('forum')->where('id',$id)->increment('num_comments', 1);
				return Redirect::intended('viewpost='.$id);
			}						  
		}
	}
	
	function question(){
		$data['data']=DB::table('category')->get();
		return view('question',$data);
	}
	
	function ask(){
		$userid = Auth::user()->id;
		$user=DB::table('users')->where('id',$userid)->first();
		$name=$user->name;
		$data = Input::all();
		$rules=array(
			'title' => 'required',
			'source' => 'required',
			'description' => 'required',
		);
		$valid=Validator::make($data,$rules);
		if($valid->fails()){
			return Redirect::to('question')->withErrors($valid);
		}
		else{	    			
			$userdata = array(
			'title' => Input::get('title'),
			'category' => Input::get('source'),
			'description' => Input::get('description'),
			'user_id' => $userid,
			'name' => $name
			);
			$data=DB::table('forum')->insert($userdata);
			return Redirect::intended('techforum');	    			
		}
	}

	function users($id){
		$users=DB::table('users')->where('id',$id)->first();
		return view('profile',compact('users'))->with('id',$id);
	}

	function log()
	{
		Auth::logout();
		Session::flush();
		return Redirect::to('/techforum');
	} 

	public function edits(Request $req)
	{			
		$data = Data::find ( $req->id );
		$data->location = $req->location;
		$data->save ();
		return response ()->json ( $data );
	} 
	
	public function edits2(Request $req)
	{			
		$data = Data::find ( $req->id );
		$data->occupation = $req->occupation;
		$data->save ();
		return response ()->json ( $data );
	} 

	public function edits3(Request $req)
	{			
		$data = Data::find ( $req->id );
		$data->interest = $req->interest;
		$data->save ();
		return response ()->json ( $data );
	} 

}