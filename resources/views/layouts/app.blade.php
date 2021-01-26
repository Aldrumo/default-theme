<!doctype html>
<html>
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link href="{{ secure_url('aldrumo/default-theme/site.css') }}" rel="stylesheet">

        <title>{{ !empty($page) ? $page->title : '' }}{{ config('app.name') }}</title>
    </head>
    <body>
        <header class="text-gray-600 body-font bg-green-50">
            <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
                <a href="/" class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0">
                    <svg viewBox="0 0 816 670" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-12 h-12 text-white p-2">
                        <path d="M307.791 97.9782C307.791 105 309.639 111.898 313.15 117.978L592.464 601.764C599.609 614.14 612.814 621.764 627.105 621.764L671.592 621.764C693.684 621.764 711.592 603.856 711.592 581.764L711.592 570.37C711.592 563.348 709.744 556.451 706.233 550.37L426.919 66.584C419.774 54.208 406.569 46.584 392.278 46.5841L347.791 46.5841C325.7 46.5841 307.791 64.4926 307.791 86.584L307.791 97.9782Z" fill="#14213D" />

                        <path d="M26.8953 570.786C26.8953 563.764 28.7436 556.867 32.2543 550.786L311.568 66.9999C318.713 54.6239 331.919 46.9999 346.209 46.9999L390.697 46.9999C412.788 46.9999 430.697 64.9085 430.697 86.9999L430.697 98.3941C430.697 105.416 428.848 112.313 425.338 118.394L146.024 602.18C138.878 614.556 125.673 622.18 111.383 622.18L66.8954 622.18C44.804 622.18 26.8954 604.271 26.8954 582.18L26.8953 570.786Z" fill="#14213D" />

                        <path d="M199.791 571.37C199.791 564.349 201.639 557.451 205.15 551.37L484.464 67.5842C491.609 55.2081 504.814 47.5842 519.105 47.5842L563.592 47.5842C585.684 47.5842 603.592 65.4928 603.592 87.5841L603.592 98.9784C603.592 106 601.744 112.898 598.233 118.978L318.919 602.764C311.774 615.14 298.569 622.764 284.278 622.764L239.791 622.764C217.7 622.764 199.791 604.856 199.791 582.764L199.791 571.37Z" fill="#F59E0B" />

                        <path d="M384.791 571.37C384.791 564.349 386.639 557.451 390.15 551.37L669.464 67.5842C676.609 55.2081 689.814 47.5842 704.105 47.5842L748.592 47.5842C770.684 47.5842 788.592 65.4928 788.592 87.5841L788.592 98.9784C788.592 106 786.744 112.898 783.233 118.978L503.919 602.764C496.774 615.14 483.569 622.764 469.278 622.764L424.791 622.764C402.7 622.764 384.791 604.856 384.791 582.764L384.791 571.37Z" fill="#059669" />
                    </svg>

                    <span class="ml-3 text-xl">{{ config('app.name') }}</span>
                </a>
                <nav class="md:ml-auto flex flex-wrap items-center text-base justify-center">
                    <a href="#" class="mr-5 hover:text-green-600">First Link</a>
                    <a href="#" class="mr-5 hover:text-green-600">Second Link</a>
                    <a href="#" class="mr-5 hover:text-green-600">Third Link</a>
                    <a href="#" class="mr-5 hover:text-green-600">Fourth Link</a>
                </nav>
                <button class="inline-flex text-white bg-green-600 border-0 py-2 px-6 focus:outline-none hover:bg-green-700 rounded text-base">
                    Button
                </button>
            </div>
        </header>

        {{ $slot }}

        <footer class="text-gray-600 body-font bg-green-50">
            <div class="container px-5 py-8 mx-auto flex items-center sm:flex-row flex-col">
                <a href="/" class="flex title-font font-medium items-center md:justify-start justify-center text-gray-900">
                    <svg viewBox="0 0 816 670" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-12 h-12 text-white p-2">
                        <path d="M307.791 97.9782C307.791 105 309.639 111.898 313.15 117.978L592.464 601.764C599.609 614.14 612.814 621.764 627.105 621.764L671.592 621.764C693.684 621.764 711.592 603.856 711.592 581.764L711.592 570.37C711.592 563.348 709.744 556.451 706.233 550.37L426.919 66.584C419.774 54.208 406.569 46.584 392.278 46.5841L347.791 46.5841C325.7 46.5841 307.791 64.4926 307.791 86.584L307.791 97.9782Z" fill="#14213D" />

                        <path d="M26.8953 570.786C26.8953 563.764 28.7436 556.867 32.2543 550.786L311.568 66.9999C318.713 54.6239 331.919 46.9999 346.209 46.9999L390.697 46.9999C412.788 46.9999 430.697 64.9085 430.697 86.9999L430.697 98.3941C430.697 105.416 428.848 112.313 425.338 118.394L146.024 602.18C138.878 614.556 125.673 622.18 111.383 622.18L66.8954 622.18C44.804 622.18 26.8954 604.271 26.8954 582.18L26.8953 570.786Z" fill="#14213D" />

                        <path d="M199.791 571.37C199.791 564.349 201.639 557.451 205.15 551.37L484.464 67.5842C491.609 55.2081 504.814 47.5842 519.105 47.5842L563.592 47.5842C585.684 47.5842 603.592 65.4928 603.592 87.5841L603.592 98.9784C603.592 106 601.744 112.898 598.233 118.978L318.919 602.764C311.774 615.14 298.569 622.764 284.278 622.764L239.791 622.764C217.7 622.764 199.791 604.856 199.791 582.764L199.791 571.37Z" fill="#F59E0B" />

                        <path d="M384.791 571.37C384.791 564.349 386.639 557.451 390.15 551.37L669.464 67.5842C676.609 55.2081 689.814 47.5842 704.105 47.5842L748.592 47.5842C770.684 47.5842 788.592 65.4928 788.592 87.5841L788.592 98.9784C788.592 106 786.744 112.898 783.233 118.978L503.919 602.764C496.774 615.14 483.569 622.764 469.278 622.764L424.791 622.764C402.7 622.764 384.791 604.856 384.791 582.764L384.791 571.37Z" fill="#059669" />
                    </svg>
                    <span class="ml-3 text-xl">{{ config('app.name') }}</span>
                </a>
                <p class="text-sm text-gray-500 sm:ml-4 sm:pl-4 sm:border-l-2 sm:border-gray-200 sm:py-2 sm:mt-0 mt-4">&copy; 2021 {{ config('app.name') }} —
                    <a href="https://twitter.com/aldrumo" class="text-gray-600 ml-1" rel="noopener noreferrer" target="_blank">@aldrumo</a>
                </p>
                <span class="inline-flex sm:ml-auto sm:mt-0 mt-4 justify-center sm:justify-start">
                            <a href="#" class="text-gray-500 hover:text-green-600">
                                <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                                    <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
                                </svg>
                            </a>
                            <a href="#" class="ml-3 text-gray-500 hover:text-green-600">
                                <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                                    <path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"></path>
                                </svg>
                            </a>
                            <a href="#" class="ml-3 text-gray-500 hover:text-green-600">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                                    <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
                                    <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
                                </svg>
                            </a>
                            <a href="#" class="ml-3 text-gray-500 hover:text-green-600">
                                <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="0" class="w-5 h-5" viewBox="0 0 24 24">
                                    <path stroke="none" d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z"></path>
                                    <circle cx="4" cy="4" r="2" stroke="none"></circle>
                                </svg>
                            </a>
                        </span>
            </div>
        </footer>
    </body>
</html>
