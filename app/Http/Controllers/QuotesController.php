<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class QuotesController extends Controller
{
    public function index()
    {
        $quotes = $this->fetchQuotes();
        return view('quotes.index', compact('quotes'));
    }

    public function fetchQuotes()
    {
        $quotes = [];
        for ($i = 0; $i < 5; $i++) {
            $response = Http::get('https://api.kanye.rest');
            $quotes[] = $response->json('quote');
        }

        return $quotes;
    }

    public function refresh()
    {
        $quotes = $this->fetchQuotes();
        return response()->json($quotes);
    }
}
