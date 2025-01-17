@extends('layouts.app')

@section('title', 'Editer une catégorie')

@section('content')
        <h1 class="text-2xl font-bold text-center">Editer une catégorie</h1>
        <form class="max-w-2xl mx-auto mt-8 p-6 bg-white rounded-lg shadow-md" method='POST'>
          @csrf
          @method('PUT')
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
              <input type="text" id="titre" name="titre" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" value='{{old('titre', $category->titre)}}'>
            </div>
          
            
            <div class="flex items-center justify-between">
              <button type="submit" class="bg-gray-800 hover:bg-gray-900 hover:scale-105 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                Soumettre
              </button>
            </div>
          </form>
          
@endsection