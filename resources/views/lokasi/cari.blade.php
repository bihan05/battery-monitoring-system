<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Public+Sans:wght@400;500;600;700&display=swap"
        rel="stylesheet" />
    <!-- Icon -->
    <script src="https://kit.fontawesome.com/f3bc409a1d.js" crossorigin="anonymous"></script>
</head>

<body>
    <div class="w-full h-auto min-h-screen flex flex-col">
        {{-- navbar --}}
        @include('layout.navbar2')
        {{-- search wrapper --}}
        <div class="w-full h-auto min-h-screen mt-[100px]">
            {{-- search input --}}
            <div class="relative w-full my-10 drop-shadow-[0_0px_4px_rgba(0,0,0,0.25)] container mx-auto">
                <div class="absolute inset-y-0 left-0 flex items-center pl-5 pointer-events-none ml-10 lg:ml-0">
                    <svg xmlns="http://www.w3.org/2000/svg" height="20" width="20" viewBox="0 0 512 512">
                        <path
                            d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z"
                            class="fill-white" />
                    </svg>
                </div>
                <input id="searchInput" type="search"
                    class="ml-10 lg:ml-0 block rounded-full bg-secondary w=full p-2 md:p-3 lg:p-4 pl-[48px] md:pl-[48px] lg:pl-[50px] text-[12px] md:text-sm lg:text-[18px] text-white focus:outline-none"
                    placeholder="Search..." required>
            </div>
            {{-- content --}}
            <div id="dataWrapper" class="w-auto h-auto min-h-screen bg-primary rounded-t-[50px]">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-[60px] mx-[50px] py-[50px]">
                    <a href="{{ url('/data/tpk') }}" class="bg-white card hover:shadow-2xl active:scale-95 transition-all duration-200 ease-out">
                        <div class="p-5 flex flex-col text-center">
                            <div class="rounded-xl overflow-hidden">
                                <img src="assets/image.jpg" />
                            </div>
                            <h5 class="text-xl md:text-2xl font-medium mt-3">
                                Stasiun Tanjung Priok
                            </h5>
                            <i class="fa-solid fa-angle-down mt-7 fa-lg"></i>
                        </div>
                    </a>
                    <a href="{{ url('/data/mggr') }}" class="bg-white card hover:shadow-2xl active:scale-95 transition-all duration-200 ease-out">
                        <div class="p-5 flex flex-col text-center">
                            <div class="rounded-xl overflow-hidden">
                                <img src="assets/image.jpg" />
                            </div>
                            <h5 class="text-xl md:text-2xl font-medium mt-3">
                                Stasiun Manggarai
                            </h5>
                            <i class="fa-solid fa-angle-down mt-7 fa-lg"></i>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
