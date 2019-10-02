<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class StudentController extends Controller
{
    public function addStudent(Request $request){
        $fullname =$request->fullname;
        $age =$request->age;
        $address =$request->address;
       DB::table('student')->insert([
           'fullname'=>$fullname,
           'age'=>$age,
           'address'=>$address
       ]);
      return redirect()->route('list-student');
    }
    public function listStudent(Request $request){
        $index =1;
        $listStudent =DB::table('student')->get();
        return view('student/form')->with([
            'index'=>$index,
           'list' =>$listStudent
        ]);
    }
}
