<?php
namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index(): View
    {
        $articles = Article::all();

        return view('articles.index', compact('articles'));
    }
    public function create(): View
    {
        return view('articles.create');
    }
    public function store(Request $request): RedirectResponse
    {
        Article::create($request->all());
        return redirect()->route('articles.index')->with('success', 'article success successfully');
    }
    public function edit(Article $article): View
    {
        return view('articles.edit', compact('article'));
    }
    public function update(Request $request, Article $article): RedirectResponse
    {
        $article->update($request->all());
        return redirect()->route('articles.index')->with('success', 'article success successfully');
    }
    public function destroy(Article $article): RedirectResponse
    {
        $article->delete();
        return redirect()->route('articles.index')->with('success', 'article deleted successfully');
    }
    public function show(Article $article): View
    {
        return view('articles.show', compact('article'));
    }
}