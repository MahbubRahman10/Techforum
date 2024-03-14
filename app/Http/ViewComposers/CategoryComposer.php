<?php

namespace App\Http\ViewComposers;

use Illuminate\View\View;
use App\Repositories\UserRepository;
use DB;

class CategoryComposer
{
    public function compose(view $view)
    {
        $category['category'] = DB::table('category')->get();
          $view->with('category',$category['category']);
    }
}