<?php

namespace App\Http\Controllers\Adnin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\StudentModel;

class StudentController extends Controller
{


    public function index(){

        $students=StudentModel::all();
        return view('student.allstudent',compact('students'));
    }

    public function store(Request $request){

        StudentModel::insert([
            'student_name' =>$request->student_name,
            'class' =>$request->class,
            'address' =>$request->address,


        ]);
        return redirect()->back();
    }

    //edit

public function Edit($id){
    $students = StudentModel::find($id);



    return view('student.edit',compact('students'));
}

// //update

public function update(Request $request,$id){
    $update = StudentModel::find($id)->update([
        'student_name' =>$request->student_name,
        'class' =>$request->class,
        'address' =>$request->address,


    ]);
    return Redirect()->route('allstudent.index');
}

    public function delete($id)
    {
        $delete = StudentModel::find($id);
        $delete->delete();
        return redirect()->back();
    }

    public function showStudent(){

        $students=StudentModel::all();
        return view('student.student',compact('students'));
    }


}
