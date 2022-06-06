<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;

class nomineeController extends Controller{
    public function nominee(){
    $student_list = array("ahmad","ali","nour","mohammad","samah","pablo");
    $rand_int = rand(0,count($student_list)-1);
    return response() ->json([
        "message" => "success",
        "nominee" => $student_list[$rand_int]
    ],200);

    }
}