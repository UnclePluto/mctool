<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use App\Category;

class ArticlesController extends Controller
{
    public function index()
    {

    }

    public function create()
    {
        $categories = Category::all();
        return view('articles.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|max:50',
            'category_id' => 'required',
            'body' => 'required|max:1000',
            'islink' => 'required',
            'link' => 'required|max:1000',
        ]);
        // dd($request);
        $article = new Article;
        $article->category_id = $request->category_id;
        $article->title = $request->title;
        $article->body = $request->body;
        $article->islink = $request->islink;
        $article->link = $request->link;
        $article->save();


        session()->flash('success', '添加完成');
        return redirect()->route('articles.create');
    }



}
