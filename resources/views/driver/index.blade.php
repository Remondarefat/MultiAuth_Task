Helooooo Driver Index

<!-- <a style="background-color: #dc3545; color: #fff; padding: 8px 16px;margin:20px; border: none; border-radius: 4px; cursor: pointer;">SignOut</a> -->

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Driver Dashboard') }}
        </h2>
    </x-slot>
    <form action="{{route('driver.logout')}}" method="POST">
    @csrf
    <button type="submit" style="background-color: #dc3545; color: #fff; padding: 8px 16px; border: none; border-radius: 4px; cursor: pointer;">SignOut</button>

</form>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    Helooooo Driver Index

                    <!-- Link to view all posts -->
                    <a href="{{ route('driver.posts.index') }}" class="btn btn-secondary mt-3">View Posts</a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>