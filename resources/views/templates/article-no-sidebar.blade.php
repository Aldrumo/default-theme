<x-DefaultTheme::app-layout>

    <section class="text-gray-600 body-font">
        <div class="container flex flex-wrap px-5 py-10 mx-auto items-top">
            <div class="w-full md:pb-8 mb-10 md:mb-0 pb-10 text-base">
                <h1 class="sm:text-3xl text-2xl font-medium title-font mb-2 text-gray-900">
                    {{ $page->title }}
                </h1>

                <x-Blocks::renderer key="article">
                    <p>Welcome to your article.</p>
                </x-Blocks::renderer>
            </div>
        </div>
    </section>

</x-DefaultTheme::app-layout>
