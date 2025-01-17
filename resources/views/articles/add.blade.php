@extends('layouts.app')

@section('title', 'Ajouter un article')

@section('content')
        <h1 class="text-2xl font-bold text-center">Ajouter un article</h1>
        <form class="max-w-2xl mx-auto mt-8 p-6 bg-white rounded-lg shadow-md" method="POST" enctype="multipart/form-data">
            @csrf
            @if(session('success'))
            <p>{{ session('success') }}</p>
            @endif
            @if($errors->any())
                <div>
                    @foreach($errors->all() AS $error)
                        <p>{{ $error }}</p>
                    @endforeach
                </div>
            @endif
            <div class="mb-4">
              <label for="titre" class="block text-gray-700 text-sm font-bold mb-2">Titre</label>
              <input type="text" id="titre" name="titre" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
            </div>
          
            <div class="mb-4">
              <label for="categories_id" class="block text-gray-700 text-sm font-bold mb-2">Catégorie</label>
              <select id="categories_id" name="categories_id" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                @foreach($categories as $category)
                  <option value="{{ $category->id }}">{{ $category->titre }}</option>
                @endforeach
              </select>
            </div>
          
            <div class="mb-4">
              <label for="auteur" class="block text-gray-700 text-sm font-bold mb-2">Auteur</label>
              <input type="text" id="auteur" name="auteur" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
            </div>
          
            <div class="mb-4">
              <label for="contenu" class="block text-gray-700 text-sm font-bold mb-2">Contenu</label>
              <textarea id="contenu" name="contenu" rows="6" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required></textarea>
            </div>
          
            <div class="mb-4">
              <label for="photo" class="block text-gray-700 text-sm font-bold mb-2">Photo</label>
              <input type="file" id="photo" name="photo" accept="image/*" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            </div>
          
            <div class="flex items-center justify-between">
              <button type="submit" class="bg-gray-800 hover:bg-gray-900 hover:scale-105 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                Soumettre
              </button>
            </div>
          </form>
          
@endsection