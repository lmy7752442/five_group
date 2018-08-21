<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class Index extends Controller
{
    //首页
    public function index(){
        return view('index.index');
    }
}
