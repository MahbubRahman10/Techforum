<?php

namespace App\Http\ViewComposers;

use Illuminate\View\View;
use App\Repositories\UserRepository;
use DB;
use App\Http\Controllers\controllertechforum;

use Request;






class PostComposer
{

	 public $id;

    
    public function __construct()
    {
    	
        $this->data = 4;
    }



    public function compose(view $view) {

		$datass = $this->data;

        $post['post'] = DB::table('blog_post')->orderBy('id', 'desc')->limit(4)->get();
        $hot['hot']=DB::table('forum')->where('visitor','>=',8)->orderBy('id', 'desc')->limit(4)->get();

			    $iid=DB::table('forum')->where('id',9)->first();		   	
			   	$relat=$iid->category;
				$related['related'] = DB::table('forum')->where([['category', '=', $relat], ['id', '!=', 2],])->get(); 


		

          $view->with('post',$post['post'])->with('related',$related['related'])->with('hot',$hot['hot'])->with('dat',$datass);
    }
}