<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Page;

class FrontendController extends Controller
{
    public function term(){
        $page=Page::where('type','term')->first();
        return view('frontend.page.term',compact('page'));
    }
}
