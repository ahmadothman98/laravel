<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;

class beerController extends Controller{
    public function beerRecipe(){
        $url = 'https://api.punkapi.com/v2/beers';
        $json = file_get_contents($url);
        $json_object = json_decode($json);
        $rand_int = rand (0,count($json_object)-1);
        return response() ->json([
            "message" => "success",
            "beer_recipe" => $json_object[$rand_int]
        ],200);
    }
}