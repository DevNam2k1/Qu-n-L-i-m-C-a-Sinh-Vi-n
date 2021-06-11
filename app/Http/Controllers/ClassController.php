<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Session;
use Illuminate\Support\Facades\Redirect;
session_start();

class ClassController extends Controller
{
    public function add_class(){
       
        $lecturers_list = DB::table('tbl_lecturers')->get();
        $major_list = DB::table('tbl_major')->get();

        return view('admin.add_class')->with('lecturers_list',$lecturers_list)->with('major_list',$major_list);
    }
    public function save_class(Request $request){
        
        $data = array();
        $data['class_id'] = $request->class_id;
        $data['major_id'] = $request->major_id;
        $data['class_name'] = $request->class_name;
        $data['lecturers_id'] = $request->lecturers_id;
        $data['student_qty'] = $request->student_qty;
        $data['start_time'] = $request->start_time;
        $data['end_time'] = $request->end_time;

        DB::table('tbl_class')->insert($data);
        return Redirect::to('/class-list');
    }
    public function class_list(){

    }
}
