<?php
namespace App\Http\Controllers;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use DB;


class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    function insert(Request $req){
    	$name=$req->input('name');
      	$data=array("name"=>$name);
      	DB::table('users')->insert($data);
        return redirect('');
    }

    function getData(){

    	$data['data'] = DB::table('users')->get();
    	if(count($data) > 0){
    		return view('form',$data);
        }
        else{
		  return view('form');
    	}
    }

    function update($id){
        $iid=DB::table('users')->where('id',$id)->first();
        return view('data',compact('iid'));
     }

    function edit(Request $req,$id){

       $name=$req->input('name');
        $data=array("name"=>$name);
        $d=DB::table('users')->where('id',$id)->update($data);
       
        return redirect('');
      
    }

    function delete($id){
       DB::table('users')->where('id',$id)->delete();
       return redirect('');
     }
}


	