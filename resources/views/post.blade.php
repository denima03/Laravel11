<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <article class="py-8 max-w-screen-md " >
        <h2 class="mb-1 text-3xl tracking-tight font-bold text-grey-300">{{ $post['title'] }}</h2>
        <div class=" text-base text-gray-300">
            <a href="#">{{ $post['autor'] }} </a> | 17 Agustus 2024
        </div>
        <p class="py-4 font-light">
            {{ $post['body'] }}
        </p>
            <a href="/posts" class="font-medium text-blue-500 hover:underline">&laquo; Back to posts</a>
    </article>
</x-layout>
