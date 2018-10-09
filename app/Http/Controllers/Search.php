<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Search extends Controller
{
    public function get() {
        return resolve('twitter')->get(
            'users/search',
            [
                "q" => request()->input('query')
            ]
        );
    }
}
