@extends('layouts.app')

@section('title', 'Liste des catégories')

@section('content')
        <h1 class="text-2xl font-bold text-center">Liste des catégories</h1>
        <div class="flex flex-wrap -mx-4">
          @foreach($categories as $category)                
            <div class="w-full md:w-1/2 p-4">
              <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <div class="p-4">   
                    <a href="">
                        <h2 class="text-xl font-bold text-gray-800 mb-2">{{ $category->titre }}</h2>
                    </a>
                    <div class="flex gap-4">
                      <a href="{{ route('categories.edit', $category) }}" class="w-1/2 bg-gray-800 hover:bg-gray-900 hover:scale-105 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                        Edit
                      </a>
                      <form action="{{ route('categories.delete', $category) }}" method="POST" class="w-1/2 bg-gray-800 hover:bg-gray-900 hover:scale-105 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" >
                          Delete
                        </button>
                      </form>
                    </div>
                </div>
              </div>
            </div>
        @endforeach
      </div>
@endsection