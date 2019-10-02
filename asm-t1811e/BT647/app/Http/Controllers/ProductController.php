<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class ProductController extends Controller
{
    public function getList(Request $request){
        $listProduct =DB::table('product')->paginate(10); // lay toan bo du lieu tu database ra
        $index = 1;
        if (isset($request->page)) {
            $index = ($request->page-1)*10+1;
        }
        return view('product/list')->with([
            'index'=>$index,
            'list'=>$listProduct
        ]);
    }
}
