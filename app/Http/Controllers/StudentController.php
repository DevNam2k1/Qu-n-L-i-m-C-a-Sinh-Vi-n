<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function student_list(){
        return view('admin.student_list');
    }
    public function add_student(){
        return view('admin.add_student');
    }
}
