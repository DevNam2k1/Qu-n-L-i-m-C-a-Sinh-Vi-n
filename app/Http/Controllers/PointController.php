<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Session;
use Illuminate\Support\Facades\Redirect;
session_start();

class PointController extends Controller
{
    public function add_point(){
        return view('admin.add_point');
    }
    public function score_list(){
        return view('admin.score_list');
    }
}
