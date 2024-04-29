
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Driver Posts') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h3 class="text-lg font-bold mb-4">Driver Posts</h3>
                    @foreach($posts as $post)
                        <div class="mb-4">
                            <h4 class="text-lg font-semibold">{{ $post->title }}</h4>
                            <p class="text-gray-600">{{ $post->content }}</p>
                            <p class="text-gray-400">Posted by: {{ $post->user->name }}</p> <!-- Access user's name -->
                            <p class="text-gray-400">{{ $post->created_at->diffForHumans() }}</p>
                        </div>
                        <hr class="border-gray-200">
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

