@extends ('layouts.app')

@section('title', 'Liste des Articles')

@section('content')
<h1 class="text-2xl font-bold text-center">Liste des articles</h1>
<div class="flex flex-wrap -mx-4">
  @foreach($articles as $article)                
    <div class="w-full md:w-1/2 p-4">
      <div class="bg-white rounded-lg shadow-md overflow-hidden">
        <div class="p-4">   
            <a href="">
                <h2 class="text-xl font-bold text-gray-800 mb-2">{{ $article->titre }}</h2>
            </a>
        </div>
      </div>
    </div>
@endforeach
</div>
@endsection