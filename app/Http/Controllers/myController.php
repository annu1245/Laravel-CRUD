<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Redirect;
use App\Student;

class myController extends Controller
{
    public function allStudents(){
    	$data = Student::all();
    	return view('allstudents',['data'=>$data]);
    }

    public function viewStudentForm(){
    	return view('view_student_form');
    }

    public function insertStudentData(Request $request){

    	$name = $request->name;
    	$enrollment = $request->enrollment;

    	$student = new Student();
    	$student->name = $name;
    	$student->enrollment = $enrollment;
    	$student->save();
    	return redirect('/');

    }

    public function deleteStudent($id){
        Student::destroy($id);
        return redirect("/");
    }

    public function showUpdate($id){
        $data = Student::where('id', $id)->get();
        return view('show_update',['data'=>$data]);
    }

    public function update(Request $request, $id){
        $name = $request->name;
        $enrollment = $request->enrollment;

        $data = Student::find($id);
        $data->name = $name;
        $data->enrollment = $enrollment;
        $data->save();
        return redirect("/");
    }
}
