<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HotelController extends Controller
{
    public function showAll(Request $request){
        $roomList=[];

            $roomList[]=
                [
                    'code'=>'P01',
                    'type'=>'Bình Dân',
                    'floor'=>'Tầng 2',
                    'price'=>1000,
                    'nameKS'=>'Khách sạn 1',
                    'address'=>'HN'
                ];


        return view('index')->with([
            'list'=>$roomList
        ]);
    }
    public function showDetail(Request $request){
        $roomList=[];

        $roomList[]=
            [
                'code'=>'P01',
                'type'=>'Bình Dân',
                'floor'=>'Tầng 2',
                'price'=>1000,
            ];


        return view('view')->with([
            'list'=>$roomList
        ]);
    }
}
