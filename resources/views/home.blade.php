

<x-guest-layout>

<section style="min-height: 70vh" class="m-10 rounded bg-gradient-to-r from-indigo-500 via-purple-500 to-pink-500 flex flex-col items-center justify-center">

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-white text-center">
        <h2 class="text-5xl font-sans font-bold">CoFound<span>.</span></h2>
        <p class="text-md mt-4">Votre projet ne se fera pas tout seul.</p>

        <div class="mt-6">
{{--            <x-cta class="bg-gray-700 hover:bg-gray-800">--}}
{{--                Je cherche des--}}
{{--            </x-cta>--}}
{{--            <x-cta>--}}
{{--                Je cherche un projet--}}
{{--            </x-cta>--}}
            <div class="flex">
                <form method="GET" action="#" >
                   @csrf
                    <div class="flex items-center gap-2">
                        <label class="hidden" for="search">Search</label>
                        <x-input name="search" class="text-gray-800 w-96 flex-1" type="search" placeholder="Rechercher un projet, un talent ..">

                        </x-input>
                        <button class="min-w-[25px] min-h-[25px]" type="submit">
                            <svg style="max-height: 30px;" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 32 32"><path d="M29 27.586l-7.552-7.552a11.018 11.018 0 1 0-1.414 1.414L27.586 29zM4 13a9 9 0 1 1 9 9a9.01 9.01 0 0 1-9-9z" fill="currentColor"></path></svg>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</section>

</x-guest-layout>
