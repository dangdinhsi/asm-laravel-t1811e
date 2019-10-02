<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $currentTime = date('Y-m-d H:i:s');

        //add student
       /* DB::table('students')->insert([
            array('rollNo' =>'d00474','name'=>Str::random(7),'age'=>26 ,'address'=>Str::random(7),'email'=>Str::random(7),'created_at'=>$currentTime,'updated_at'=>$currentTime),
            array('rollNo' =>'d00475','name'=>Str::random(7),'age'=>27 ,'address'=>Str::random(7),'email'=>Str::random(7),'created_at'=>$currentTime,'updated_at'=>$currentTime),
            array('rollNo' =>'d00476','name'=>Str::random(7),'age'=>28 ,'address'=>Str::random(7),'email'=>Str::random(7),'created_at'=>$currentTime,'updated_at'=>$currentTime),
            array('rollNo' =>'d00477','name'=>Str::random(7),'age'=>29 ,'address'=>Str::random(7),'email'=>Str::random(7),'created_at'=>$currentTime,'updated_at'=>$currentTime),
            array('rollNo' =>'d00478','name'=>Str::random(7),'age'=>30 ,'address'=>Str::random(7),'email'=>Str::random(7),'created_at'=>$currentTime,'updated_at'=>$currentTime),
        ]);*/
        //add subject
       /* DB::table('subjects')->insert([
            array('subject_id'=>'toan','name'=>Str::random(8),'created_at'=>$currentTime,'updated_at'=>$currentTime),
            array('subject_id'=>'li','name'=>Str::random(8),'created_at'=>$currentTime,'updated_at'=>$currentTime),
            array('subject_id'=>'hoa','name'=>Str::random(8),'created_at'=>$currentTime,'updated_at'=>$currentTime),
            array('subject_id'=>'van','name'=>Str::random(8),'created_at'=>$currentTime,'updated_at'=>$currentTime),
            array('subject_id'=>'su','name'=>Str::random(8),'created_at'=>$currentTime,'updated_at'=>$currentTime),
        ]);*/

       //add point
       /*DB::table('points')->insert([
           array('sub_id'=>'toan','rollNo'=>'d00474','point'=>5,'created_at'=>$currentTime,'updated_at'=>$currentTime),
           array('sub_id'=>'li','rollNo'=>'d00474','point'=>6,'created_at'=>$currentTime,'updated_at'=>$currentTime),
           array('sub_id'=>'hoa','rollNo'=>'d00474','point'=>7,'created_at'=>$currentTime,'updated_at'=>$currentTime),
           array('sub_id'=>'van','rollNo'=>'d00474','point'=>8,'created_at'=>$currentTime,'updated_at'=>$currentTime),
           array('sub_id'=>'su','rollNo'=>'d00474','point'=>9,'created_at'=>$currentTime,'updated_at'=>$currentTime),
       ]);*/
    }
}
