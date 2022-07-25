@props(['post'])

<article class="my-8 bg-white shadow-lg rounded-lg overflow-hidden">
    <img class="w-full h-72 object-cover object-center" src="http://localhost/BlogPrueba/public/{{Storage::url($post->image->url)}}" alt="">
    <img src="" alt="">

    <div class="px-6 py-4">
        <h1 class="font-bold text-xl mb-2">
            <a href="{{route('posts.show', $post)}}">{{$post->name}}</a>
        </h1>
        <div class="text-gray-700 text-base">
            {{$post->stract}}
        </div>
        <div class="px-6 pt-4 pb-2">
            @foreach ($post->tags as $tag)
                <a  href="{{route('posts.tag', $tag)}}" class="mr-2 text-gray-700 text-sm px-3 py-1 inline-block bg-gray-200 rounded-full">{{$tag->name}}</a>
            @endforeach
        </div>
    </div>
</article>