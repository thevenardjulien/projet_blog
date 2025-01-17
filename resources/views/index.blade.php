@extends('layouts.app-aside')

@section('title', 'Welcome')

@section('content')
    <div class="flex gap-10">
        <div class="flex flex-col justify-center w-full">
            <h1 class="text-2xl text-center font-bold">Bienvenue sur Projet_blog !</h1>
            <section class="cardsList grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 pt-10">
            @foreach($articles AS $article)
            <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 flex">
                <div href="#">
                    <img class="rounded-t-lg w-30" src="{{ $article->getPhotoUrlAttribute() }}" alt="{{ $article->titre }}">
                </div>
                <div class="p-5">
                    <a href="#">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $article->titre }}</h5>
                    </a>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{ $article->contenu }}</p>
                    <a href="{{ route('articles.show', $article) }}" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        Voir plus
                        <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                        </svg>
                    </a>
                </div>
            </div>
            @endforeach
            </section>
        </div>
    </div>
@endsection