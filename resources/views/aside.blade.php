<div class="flex flex-col gap-4">
    <div class="flex flex-col gap-1">
        <h2 class="text-2xl font-bold mb-1">Categories</h2>
        <ul class="list-disc pl-5">
            @foreach($categories AS $category)
            <li>
                <a href="#">{{ $category->titre }}</a>
            </li>
            @endforeach
        </ul>
    </div>
    <div class="flex flex-col gap-1">
        <h2 class="text-2xl font-bold mb-1">Derniers articles</h2>
        <ul class="list-disc pl-5">
            @foreach($articles AS $article)
            <li>
                <a href="#">{{ $article->titre }}</a>
            </li>
            @endforeach
        </ul>
    </div>
</div>
