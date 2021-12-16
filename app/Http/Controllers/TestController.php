<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class testController extends Controller
{
    public function index(){
        return '建物です';
    }
    public function test($test){
        return "部屋番号は{$test}です";
    }
}
