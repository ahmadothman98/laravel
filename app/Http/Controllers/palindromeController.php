<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;


class palindromeController extends Controller{
public function checkPalindromes(){

    $list = ['huge','nun','fuf','open'];
    $count = 0;
    for($i = 0 ; $i<count($list);$i++){
        $left = 0;
        $right = strlen($list[$i]) - 1;
        $is_palindrom = 0;

        while($right > $left){
          if ($list[$i][$left] != $list[$i][$right]){
            $is_palindrom = 1;
            break;
          }

          $right--;
          $left++;
        }
        if($is_palindrom==0){
            $count++;
        }
        
    }
    return response() ->json([
        "message" => "success",
        "count" => $count
    ],200);
}
}