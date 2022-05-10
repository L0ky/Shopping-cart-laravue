<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ArticleController extends Controller
{
    public function index()
    {
        return view('shop');
    }
    public function list()
    {
        return response()->json([
            'shop' => \App\Models\Articles::latest()->get()
        ], Response::HTTP_OK); // reponse
    }
}
