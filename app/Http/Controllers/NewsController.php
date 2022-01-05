<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        $news = News::all();
        return view('admin.news', compact('news'));

    }

    public function store(Request $request)
    {
        $news = new News;

        $news->content = $request->input('content');
        $news->image = $request->file('image');
        $news->title = $request->input('title');

        $news->save();
        return back();
        return redirect()->route('front.news', compact('news'));

    }
}
