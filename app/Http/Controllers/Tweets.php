<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Tweets extends Controller
{
    public function get() {
        $tweets = resolve('twitter')->get(
            "statuses/user_timeline",
            [
                "screen_name" => request()->input('screen_name'),
                "count" => 25
            ]
        );
        if(!isset($tweets->errors))
            return array_column($tweets, 'id_str');
        
        return 'no results found';
    }
}
