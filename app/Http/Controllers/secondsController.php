<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;

class secondsController extends Controller{
    public function countTime(){
        $current_time = strtotime(date('Y-m-d'));
        $old_date = strtotime('1732-4-14');
        $time_difference = $current_time - $old_date;
        return response() ->json([
            "message" => "success",
            "seconds-passed" => $time_difference
        ],200);
    }
}