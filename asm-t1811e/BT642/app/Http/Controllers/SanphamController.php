<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class SanphamController extends Controller
{
    public function addSP(Request $request){
        $title = $request->title;
        $price =$request->price;
        $discount=$request->discount;
        $image = $request->image;
        DB::table('sanpham')->insert([
            'title'=>$title,
            'price'=>$price,
            'discount'=>$discount,
            'url_image'=>$image
        ]);
        return redirect()->route('list-sp');
    }
    public function listSP(Request $request){
        $list = DB::table('sanpham')->get();
        return view('dsSanpham')->with([
            'list'=>$list
        ]);
    }
}
