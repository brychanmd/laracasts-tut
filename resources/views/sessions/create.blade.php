<x-layout>
	<section class="px-6 py-8">
        <main class="max-w-lg mx-auto mt-10 bg-gray-100 p-6 rounded-xl border border-gray-150">

            <h1 class="text-center font-bold text-xl">Log In!</h1>

            <form action="/sessions" method="post">

                @csrf

                <div class="mb-6">
                    <label 
                        for="email" 
                        class="block mb-2 uppercase font-bold text-xs text-gray-700"
                    >
                    Email Address
                    </label>

                    <input 
                        class="border border-gray-400 p-2 w-full" 
                        type="email" 
                        name="email"
                        id="email"
                        value="{{ old('email') }}"
                        required
                    >

                    @error('email')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror

                </div>

                <div class="mb-6">
                    <label 
                        for="password" 
                        class="block mb-2 uppercase font-bold text-xs text-gray-700"
                    >
                    Password
                    </label>

                    <input 
                        class="border border-gray-400 p-2 w-full" 
                        type="password" 
                        name="password"
                        id="password"
                        required
                    >

                    @error('password')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror

                </div>

                <div class="mb-6">
                    <button
                        type="submit" 
                        class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-500"
                    >
                    Submit
                    </button>
                </div>

                @if ( $errors->any() )    
                    <ul>
                        @foreach ( $errors->all() as $error )
                            <li class="text-red-500 text-xs">{{ $error }}</li>
                        @endforeach
                    </ul>
                @endif

            </form>

        </main>
    </section>
</x-layout>