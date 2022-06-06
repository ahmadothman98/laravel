<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;

class groupController extends Controller{
    public function groupOfTwo(){
        $first_student = '';
        $second_student = '';
        $student_list = array("ahmad","ali","nour","mohammad","samah");
        shuffle($student_list);
        $groups = array_chunk($student_list,2);
        return response() ->json([
            "message" => "success",
            "student groups" => $groups
        ],200);

        }
    }
