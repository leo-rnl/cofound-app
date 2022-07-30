<x-guest-layout>

    <x-slot name="header">
        <h1>Tous les projets</h1>
    </x-slot>

    <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mt-10">
        <ul class="grid grid-cols-12 gap-2.5">

            @foreach($projects as $project)

                <li class="col-span-3 bg-gray-50 border-gray-200 p-2 rounded-xl">
                    <h3>
                        {{ $project->name }}
                    </h3>
                </li>

            @endforeach
        </ul>
    </section>

</x-guest-layout>
