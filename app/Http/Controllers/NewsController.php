<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class NewsController extends Controller
{
    public function index()
    {
        return view('news.index');
    }

    public function fetchNews()
    {
        $response = Http::get('https://newsapi.org/v2/everything?q=automotive&pageSize=6&apiKey=1440b808b762433e9e22b71881954a84');
        $data = $response->json();

        return response()->json($data);
    }
}
