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
            echo "Name:".$name.'<br>';
            echo "IMG:<img src='$img' width='100px'><br>";
            echo "Price:".$price.'<br>';
            echo "Discount:".$discount.'<br>';
            echo "Description:".$description.'<br>';
        }
    }
}
