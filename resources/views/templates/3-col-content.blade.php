<x-DefaultTheme::app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ $page->title }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="flex">
                    <div class="flex-grow">
                        <x-Blocks::renderer>
                            Left Col
                        </x-Blocks::renderer>
                    </div>

                    <div class="flex-grow">
                        <x-Blocks::renderer>
                            Middle Col
                        </x-Blocks::renderer>
                    </div>

                    <div class="flex-grow">
                        <x-Blocks::renderer>
                            Right Col
                        </x-Blocks::renderer>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-DefaultTheme::app-layout>
