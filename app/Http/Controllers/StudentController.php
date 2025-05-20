<?php

namespace App\Http\Controllers;

use App\Models\Student_M;
use Illuminate\Http\Request;

class StudentController extends Controller
{
   public function index(){
      $Students = Student_M::get();
      return view("Student.index", compact('Students'));
   }
   public function create(){
      $Students = Student_M::get();
      return view("Student.create", compact('Students'));
   }
   public function store(Request $request){
      $request->validate([
         
         'fname'=> 'required|max:255|string',
         'mname'=> 'required|max:255|string',
         'lname'=> 'required|max:255|string',
         'Stud_add'=> 'required|max:255|string',
         'Stud_dob'=> 'required|max:255|string'
         
      ]);
      $Students = Student_M::get();
      Student_M::create($request->all());
      return view ('Student.create', compact('Students'));
      
   }
   public function destroy(int $id){
      $Students = Student_M::findOrFail($id); 
      $Students->delete();
      return redirect()->back()->with('Status','Student deleted');
   }
}
