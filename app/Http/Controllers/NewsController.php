<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;
use App\Models\NewsCategory;

class NewsController extends Controller
{
    public function index(){

        $categories = NewsCategory::with(['authors','news.authors'])->get();

        return view('news.news')
                   ->with(['categories' => $categories]);
    }
}
