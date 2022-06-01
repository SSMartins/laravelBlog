<x-guest-layout>

    <div class="container mx-auto p-5">
        <h1 class="text-4xl mt-32 text-center tracking-tight leading-10 font-extrabold text-gray-900 sm:text-5xl sm:leading-none md:text-6xl">
        Découvre les plus beaux endroits de France
        </h1>
        <h4 class="mt-10 px-20 text-center text-gray-500 sm:text-1xl sm:leading-none md:text-2xl">Avec plus de 77 millions de touristes, la France est le pays le plus visité au monde en 2019. On a souvent tendance à penser qu’il nous faut partir à l’autre bout du monde pour voir de beaux paysages et se sentir dépaysé. J’ai décidé de te prouver que tu peux découvrir d’incroyables paysages en prenant seulement la voiture ou le train. Voici donc les 50 plus beaux endroits de France qu’il faut absolument visiter !</h4>




        <div class="grid grid-cols-1 md:grid-cols-2 p-7 justify-items-center">
            @foreach($posts as $post)
            <div class="max-w-xl rounded overflow-hidden shadow-lg my-10">
                <img class="w-full" src="../../../storage/post_images/{{$post->post_image}}" alt="Sunset in the mountains">
                <div class="px-6 py-4">
                    <a href="/post/{{ $post->id }}" class="text-2xl font-bold mb-5">{{ $post->title }}</a>
                    <p class="text-grey-darker text-base">{!! $post->details !!} </p>
                    <p class="text-gray-400 mt-6"> on {{ date('M d Y', strtotime($post->created_at)) }} - {{ $post->user->name }}</p>
                </div>
                <div class="px-6 py-4">
                    <span class="inline-block bg-grey-lighter rounded-full px-3 py-1 text-sm font-semibold text-grey-darker mr-2">#photo</span>
                    <span class="inline-block bg-grey-lighter rounded-full px-3 py-1 text-sm font-semibold text-grey-darker mr-2">#voyage</span>
                </div>
            </div>
            @endforeach
        </div>
    </div>


</x-guest-layout>

