@extends('layouts.app')

@section('title', 'Article : ' . $article->titre)

@section('content')
<div class="container my-5">
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
        <!-- Colonne de gauche pour les informations sur l'article -->
        <div class="lg:col-span-1">
            <div class="bg-white shadow-md rounded-lg p-4">
                @if($article->photo)
                    <img src="{{ asset('storage/' . $article->photo) }}" class="w-full h-auto rounded-lg mb-4" alt="{{ $article->titre }}">
                @endif
                <h5 class="text-lg font-semibold">{{ $article->titre }}</h5>
                <p class="text-gray-600">
                    Par <strong>{{ $article->auteur }}</strong><br>
                    Publié le {{ $article->created_at->format('d/m/Y à H:i') }} 
                    @if($article->updated_at != $article->created_at)
                        | Mis à jour le {{ $article->updated_at->format('d/m/Y à H:i') }}
                    @endif
                </p>
                <div class="mt-2 text-sm font-medium text-gray-600">
                    Catégorie : 
                    <span class="bg-secondary text-decoration-none link-light px-2 py-1 rounded">{{ $article->category ? $article->category->titre : 'Aucune catégorie' }}</span>
                </div>
            </div>
        </div>

        <!-- Colonne de droite pour le contenu de l'article -->
        <div class="lg:col-span-2">
            <article class="bg-light p-4 rounded-lg shadow-md">
                <header class="mb-4">
                    {{-- <h2 class="fw-bold mb-3">Contenu</h2> --}}
                </header>

                <section class="mb-5">
                    {!! nl2br(e($article->contenu)) !!} <!-- Utilisation de nl2br pour conserver les sauts de ligne -->
                </section>

                <footer class="mt-4 text-center">
                    {{-- <a href="" class="btn btn-primary">Retour à la liste des articles</a> --}}
                </footer>
            </article>
        </div>
    </div>
</div>
@endsection
