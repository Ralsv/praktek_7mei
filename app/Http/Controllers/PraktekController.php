<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class PraktekController extends Controller
{
    public function index (){
        $kakang = "bambam";
        $student = Student::all();
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                
            return view('student', compact (['student']));
    }
    public function create(){
        return view('create_student');
    }
    public function store(Request $request){
        $student = Student::create([
            'name' => $request->name,
            'class' => $request->class,
            'gender' => $request->gender
        ]);
        return redirect('/praktek');
    }
    public function delete($id){
        $delete = Student::findOrfail($id);
        $delete->delete();
        return redirect('/praktek');
    }
    public function edit($id){
        $student = Student::findOrfail($id);
        return view('edit' ,compact(['student']));
    }
    public function update(Request $request,$id){
        $student = Student::findOrfail($id);
        $student -> update([
            'name' => $request->name,
            'class' => $request->class,
            'gender' => $request->gender,
        ]);
        return redirect('/praktek');

    }
}
