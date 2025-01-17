<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('categories.list', ['categories' => $categories]);
    }

    public function add()
    {
        return view('categories.add');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'titre' => 'required|string|min:4|max:255',
        ]);

        if ($request->hasFile('photo')) {
            $path = $request->file('photo')->store('photos', 'public');
            // Il faudra exécuter la commande suivante pour permettre le lien symbolique entre stroage et public
            // php artisan storage:link
            $validated['photo'] = $path;
        }

        Category::create($validated);

        return back()->with('success', 'Nouvelle catégorie créée');
    }
}
