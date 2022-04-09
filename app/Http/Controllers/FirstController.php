<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use stdClass;

class FirstController extends Controller
{
    public function __construct()
    {
        $this -> middleware(middleware: 'auth') -> except(methods: 'myOff');
    }
    public function myLove(){
        return 'hassan';
    }
    public function myOff(){
        $obj = new stdClass();
        $obj -> name = 'lolo';
        $obj -> id = 2;
        return view('hello', compact(var_name: 'obj'));
    }
}