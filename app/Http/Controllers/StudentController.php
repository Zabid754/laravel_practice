<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    //
    function getStudents(){
        $data1= new \App\Models\Student;
        echo $data1->testFun();
        //$students= Student::all();
        //$students= Student::where('Phone','21000')->get();
        //$students= Student::where('Phone','21000')->first();
        //$students= Student::find(3);
        $students= Student::insert([
            'Name'=>'Sami',
            'email'=>'sami@test.com',
            'Phone'=>'01010',
        ]);
        if($students){
            return "data inserted";
        }
        else{
            return "data not inserted";
        }

        





        $students=[$students];


        return view('students',['data'=>$students]);
    }
}
