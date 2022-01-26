@auth()
    <x-panel>
        <form action="/posts/{{ $post->slug }}/comments" method="post">
            @csrf

            <header class="flex">
                <img src="https://i.pravatar.cc/60?u={{ auth()->id() }}" width="40" height="40" class="rounded-full">

                <h2 class="ml-3">Want to participate?</h2>
            </header>

            <div class="mt-8">
                <textarea name="body" class="w-full text-sm focus:outline-none focus:ring p-2 border-b border-gray-200" id="" cols="30" rows="5" placeholder="Quick, think of something to say..."></textarea>

                @error('body')
                    <span>{{ $message }}</span>
                @enderror

            </div>

            <div class="flex justify-end mt-2">
                <x-submit-button>Post</x-submit-button>
            </div>
        </form>
    </x-panel>
@endauth