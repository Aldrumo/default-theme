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
                        <x-Blocks::renderer key="sidebar">
                            Left Col
                        </x-Blocks::renderer>
                    </div>

                    <div class="flex-grow">
                        <h1>Contact Us</h1>

                        <x-Blocks::renderer key="intro">
                            Some contact intro stuff here
                        </x-Blocks::renderer>

                        <form>
                            <input type="text"> <button type="submit">Send</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-DefaultTheme::app-layout>
