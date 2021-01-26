<x-DefaultTheme::app-layout>

    <section class="text-gray-600 body-font">
        <div class="container flex flex-wrap px-5 py-10 mx-auto items-top">
            <div class="md:w-4/5 md:pr-12 md:pb-8 md:border-r md:border-b-0 mb-10 md:mb-0 pb-10 border-b border-gray-200 text-base">
                <h1 class="sm:text-3xl text-2xl font-medium title-font mb-2 text-gray-900">
                    {{ $page->title }}
                </h1>

                <x-Blocks::renderer key="article">
                    <p>Welcome to your article.</p>
                </x-Blocks::renderer>
            </div>
            <div class="flex flex-col md:w-1/5 md:pl-12">
                <x-Blocks::renderer key="sidebar">
                    <h2 class="title-font font-semibold text-gray-800 tracking-wider text-sm mb-3">Links</h2>
                    <nav class="flex flex-wrap list-none -mb-1">
                        <li class="mb-1 w-full">
                            <a href="#" class="text-gray-600 hover:text-gray-800">First Link</a>
                        </li>
                        <li class="mb-1 w-full">
                            <a href="#" class="text-gray-600 hover:text-gray-800">Second Link</a>
                        </li>
                        <li class="mb-1 w-full">
                            <a href="#" class="text-gray-600 hover:text-gray-800">Third Link</a>
                        </li>
                        <li class="mb-1 w-full">
                            <a href="#" class="text-gray-600 hover:text-gray-800">Fourth Link</a>
                        </li>
                        <li class="mb-1 w-full">
                            <a href="#" class="text-gray-600 hover:text-gray-800">Fifth Link</a>
                        </li>
                        <li class="mb-1 w-full">
                            <a href="#" class="text-gray-600 hover:text-gray-800">Sixth Link</a>
                        </li>
                        <li class="mb-1 w-full">
                            <a href="#" class="text-gray-600 hover:text-gray-800">Seventh Link</a>
                        </li>
                        <li class="mb-1 w-full">
                            <a href="#" class="text-gray-600 hover:text-gray-800">Eighth Link</a>
                        </li>
                    </nav>
                </x-Blocks::renderer>
            </div>
        </div>
    </section>

</x-DefaultTheme::app-layout>
