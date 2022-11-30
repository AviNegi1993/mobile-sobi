<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Page;
class PageController extends Controller
{
    public function getTerm(){
        $page=Page::where('type','term')->first();
        return view('admin.pages.term',compact('page'));
    }
    public function storeTerm(Request $request){
       if(!empty($request->id)){
        Page::find($request->id)->update($request->only('title','type','description'));
       }else{
        Page::create($request->only('title','type','description'));
       }
       return back()->with('success', 'Updated successfully!');
 
    }
    public function getPrivacy(){
        $page=Page::where('type','privacy')->first();
        return view('admin.pages.privacy',compact('page'));
    }
    public function getImprint(){
        $page=Page::where('type','imprint')->first();
        return view('admin.pages.imprint',compact('page'));
    }
}
