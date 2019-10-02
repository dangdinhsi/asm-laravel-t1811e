<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function addProduct(Request $request){
//        var_dump($request->all());
        $name =$request->name;
        $img =$request->image;
        $price =$request->price;
        $discount=$request->discount;
        $description =$request->description;

        if($name =='' || $img=='') {
            return redirect()->route('form-input-product');
        }else{
           $arr = array(
                'name'=>$name,
               'img'=>$img,
               'price'=>$price,
               'discount'=>$discount,
               'description'=>$description
            );
            return view('product/form')->with([
               'arr'=>$arr
            ]);
        }
    }
}
