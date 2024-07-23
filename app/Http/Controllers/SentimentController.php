<?php

namespace App\Http\Controllers;

use App\Models\Sentiment;
use Illuminate\Http\Request;

class SentimentController extends Controller
{
    //
    public function index(Request $request)
    {
        $data = [
            "title" => "Sentimen",
        ];
        $data["sentiments"] = Sentiment::orderByDesc("created_at")->get();
        $data['filter_selected'] = "all";
        if (isset($request['filter']) && $request['filter'] != "all") {
            $data["sentiments"] = Sentiment::where("sentimen", $request['filter'])->orderByDesc("created_at")->get();
            $data['filter_selected'] = $request['filter'];
        }
        $data["total_sentiments"] = Sentiment::all()->count();
        $data["positive_sentiments"] = Sentiment::where("sentimen", "positif")->count();
        $data["negative_sentiments"] = Sentiment::where("sentimen", "negatif")->count();
        $data["neutral_sentiments"] = Sentiment::where("sentimen", "netral")->count();
        // dd($data["positive_sentiments"]);
        return view('pages.users.sentiment', $data);
    }

    public function create(Request $request)
    {
        $validatedData = $request->validate([
            'ulasan' => 'required|string',
            'sentimen' => 'required|string',
        ]);

        $created_sentiment = Sentiment::create($validatedData);
        if ($created_sentiment) {
            return response()->json(['success' => 'Comment created successfully!'], 200);
        }
    }
}
