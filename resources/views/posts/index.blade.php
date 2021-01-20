<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Posts') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="p-6 bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="flex w-full font-semibold p-2 bg-blue-100 border-blue-300 border-b">
                    <div class="w-1/2">Title</div>
                    <div class="w-1/2">Body</div>
                </div>
                @foreach($posts as $post)
                    <div class="flex w-full p-2">
                        <div class="w-1/2">{{ $post->title }}</div>
                        <div class="w-1/2">{{ $post->body }}</div>
                    </div>
                @endforeach
                <div class="pt-4">
                    {{ $posts->links() }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
