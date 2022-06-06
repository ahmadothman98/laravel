<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;

class textController extends Controller{
    public function textResponse(){
        $url = 'https://icanhazdadjoke.com/slack';
        $json = file_get_contents($url);
        $json_object = json_decode($json);
        $text_response = $json_object->attachments;
        return response() ->json([
            "message" => "success",
            "seconds-passed" => $text_response[0]->text
        ],200);
    }
}