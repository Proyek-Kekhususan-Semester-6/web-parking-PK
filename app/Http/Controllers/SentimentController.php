<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SentimentController extends Controller
{
    //
    public function index()
    {
        $data = [
            "title" => "Sentimen",
        ];
        return view('pages.users.sentiment', $data);
    }
}
