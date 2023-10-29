<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use App\Http\Requests\ArticleRequest;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::all();
        return view('articles.index', ['articles' => $articles]);
    }

    public function create()
    {
        return view('articles.create');
    }
    public function store(ArticleRequest $request)
    {
        $article = new article();

        $article->title = $request->title;
        $article->body = $request->body;

        $article->save();

        return redirect(route('articles.index'));
    }

    public function show($id)
    {
        $article = article::find($id);
        return view('articles.show', ['article' => $article]);
    }
}
