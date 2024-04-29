<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}

                    <!-- Link to create a new post -->
                    <a href="{{ route('posts.create') }}" class="btn btn-primary mt-3">Create Post</a>

                    <!-- Link to view all posts -->
                    <a href="{{ route('posts.index') }}" class="btn btn-secondary mt-3">View Posts</a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

