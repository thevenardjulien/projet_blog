<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;

class ArticleController extends Controller
{

    public function index()
    {
        $articles = Article::orderBy('created_at', 'DESC')->get();
        $categories = Category::all();
        return view('index', ['articles' => $articles, 'categories' => $categories]);
    }

    public function add()
    {
        $categories = Category::all();
        return view('articles.add', ['categories' => $categories]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'titre' => 'required|string|min:4|max:255',
            'categories_id' => 'required|min:1|exists:categories,id',
            'auteur' => 'required|string|min:4|max:255',
            'contenu' => 'required|string|min:10|max:10000',
            'photo' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        if ($request->hasFile('photo')) {
            $path = $request->file('photo')->store('photos', 'public');
            // Il faudra exécuter la commande suivante pour permettre le lien symbolique entre stroage et public
            // php artisan storage:link
            $validated['photo'] = $path;
        }

        Article::create($validated);

        return back()->with('success', 'Nouvel article enregistré');
    }

    public function list()
    {
        $articles = Article::all();
        return view('articles.list', ['articles' => $articles]);
    }

    public function show(Article $article)
    {
        $selectedArticle = Article::with('category')->findOrFail($article->id);
        return view('articles.show', ['article' => $selectedArticle]);
    }
}
