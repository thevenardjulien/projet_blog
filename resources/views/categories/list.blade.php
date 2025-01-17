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
                </div>
              </div>
            </div>
        @endforeach
      </div>
@endsection