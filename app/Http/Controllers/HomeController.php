<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class HomeController extends Controller
{
    public function getAll(){
        $article = Article::all();
        return view('home',['article'=> $article]);
    }
}
