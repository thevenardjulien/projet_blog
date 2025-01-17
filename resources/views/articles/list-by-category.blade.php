@extends('layouts.app-aside')

@section('title', 'Welcome')

@section('content')
    <div class="flex">
        <div class="flex flex-col justify-center w-full">
            <h1 class="text-2xl text-center font-bold mb-10">Bienvenue sur Projet_blog !</h1>
            <section class="flex gap-4 justify-around">
                <button class=" p-4 border-2 border-gray-200 rounded-lg w-4/5 mx-auto">
                    <a href="{{ route('index') }}">
                        Toutes
                    </a>
                </button>
                @foreach($categories as $category)
                <button class=" p-4 border-2 border-gray-200 rounded-lg w-4/5 mx-auto">
                    <a href="{{ route('articles.list-by-category', $category) }}">
                        {{ $category->titre }}
                    </a>
                </button>
                @endforeach
            </section>
            <section class="cardsList grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 pt-10 mx-auto">
                @foreach($articles as $article)
                    <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 flex flex-col">
                        <img class="rounded-t-lg w-full h-48 object-cover" src="{{ $article->getPhotoUrlAttribute() }}" alt="{{ $article->titre }}">
                        <div class="p-5 flex-grow">
                            <a href="#">
                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $article->titre }}</h5>
                            </a>
                            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400 line-clamp-5">{{ $article->contenu }}</p>
                        </div>
                        <div class="p-5">
                            <a href="{{ route('articles.show', $article->id) }}" class="inline-flex items-center justify-center w-full px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                Voir plus
                                <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                @endforeach
        </div>
    </div>
    <div class="py-10">
        {!! $articles->links() !!}
    </div>
@endsection
