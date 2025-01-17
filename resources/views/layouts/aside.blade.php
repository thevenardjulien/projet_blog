<div class="flex flex-col gap-4">
    <div class="flex flex-col gap-1">
        <form method="POST" action="{{ route('articles.search') }}">
            @csrf
            <h2 class="text-2xl font-bold mb-1 flex">Rechercher</h2>
            <input class="border-2 w-full p-1 mb-2 rounded" type="text" name="search" id="search">
            <button class="w-full bg-gray-800 hover:bg-gray-900 hover:scale-105 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                Confirmer
            </button>
        </form>
    </div>
    <div class="flex flex-col gap-1">
        <h2 class="text-2xl font-bold mb-1">Categories</h2>
        <ul class="list-disc pl-5">
            <li>
                <a href="{{ route('index') }}">Toutes</a>
            </li>
            @foreach($categories AS $category)
            <li>
                <a href="{{ route('articles.list-by-category', $category) }}">{{ $category->titre }}</a>
            </li>
            @endforeach
        </ul>
    </div>
    <div class="flex flex-col gap-1">
        <h2 class="text-2xl font-bold mb-1">Derniers articles ({{ $articleTitle }})</h2>
        <ul class="list-disc pl-5">
            @foreach($articles AS $article)
            <li>
                <a href="{{ route('articles.show', $article) }}">{{ $article->titre }}</a>
            </li>
            @endforeach
        </ul>
    </div>

</div>
