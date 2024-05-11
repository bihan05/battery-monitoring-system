<!-- resources/views/bms/index.blade.php -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BMS Monitoring</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    {{-- JQuery --}}
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    {{-- Vite --}}
    @vite('resources/css/app.css')
    {{-- Data --}}
    <script src="{{ asset('js/bms.js') }}"></script>
    {{-- Icon --}}
    <script src="https://kit.fontawesome.com/f3bc409a1d.js" crossorigin="anonymous"></script>
</head>

<body>
    <div class="w-full h-auto min-h-screen flex flex-col">
        @include('layout.navbar2')
        <?php
        $circumference = ((2 * 22) / 7) * 63;
        $persen = 100;
        $progress = $circumference - ($persen / 100) * $circumference;
        ?>
        {{-- Content --}}
        <div class="w-full min-h-screen flex flex-col text-black">
            <div class="flex items-center text-center mx-auto mt-[150px]">
                <h1 class="text-5xl md:text-5xl lg:text-6xl font-bold">
                    Data Battery Bank
                </h1>
            </div>
            <div class="flex justify-center">
                <div
                    class="text-2xl bg-[#d25525] font-semibold mt-8 rounded-full shadow-md px-7 py-2 text-white hover:shadow-xl transition-all duration-200 ease-out">
                    <i class="fa-solid fa-location-dot mr-2" style="color: #fffff;"></i>
                    Tanjung Priok
                </div>
                <a href="{{ url('/search') }}"
                    class="ml-3 text-2xl bg-[#d25525] font-semibold mt-8 rounded-full shadow-md px-7 py-2 text-white hover:shadow-xl transition-all duration-200 ease-out hover:bg-[#252271] active:scale-95"
                    style="text-decoration: none"><i class="fa-solid fa-table mr-2"></i>
                    Review Data
                </a>
            </div>
            <div class="mt-[60px] flex items-center justify-center">
                <div id="bms-data" class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-20 mx-4 text-white"
                    style="text-decoration: none">
                    {{-- Card --}}
                    <div class="bg-[#252271] card hover:shadow-2xl transition-all duration-200 ease-out">
                        <div class="flex flex-col items-center mx-10 my-7">
                            <div class="w-[150px] h-[150px] rounded-full flex items-center justify-center bg-white">
                                <svg class="-rotate-90 w-[150px] h-[150px]">
                                    <circle style="color: #ffff;" stroke-width="10" stroke="currentColor"
                                        fill="transparent" r="63" cx="75" cy="75" />
                                    <circle style="color: #d25525;" stroke-width="12"
                                        stroke-dasharray="{{ $circumference }}" stroke-dashoffset="{{ $progress }}"
                                        stroke-linecap="round" stroke="currentColor" fill="transparent" r="63"
                                        cx="75" cy="75" />
                                </svg>
                                <span id="persen" class="absolute font-bold text-3xl text-[#d25525]">0%</span>
                            </div>
                            <span class="mt-5 font-bold text-2xl uppercase text-center">Baterai 1</span>
                            <span id="tegangan" class="mt-3 font-medium text-xl text-center">0 VDC</span>
                            <span id="rd" class="font-medium text-xl text-center">0 mOhm</span>
                        </div>
                    </div>
                    <div class="bg-[#252271] card hover:shadow-2xl transition-all duration-200 ease-out">
                        <div class="flex flex-col items-center mx-10 my-7">
                            <div class="w-[150px] h-[150px] rounded-full flex items-center justify-center bg-white">
                                <svg class="-rotate-90 w-[150px] h-[150px]">
                                    <circle style="color: #ffff;" stroke-width="10" stroke="currentColor"
                                        fill="transparent" r="63" cx="75" cy="75" />
                                    <circle style="color: #d25525;" stroke-width="12"
                                        stroke-dasharray="{{ $circumference }}" stroke-dashoffset="{{ $progress }}"
                                        stroke-linecap="round" stroke="currentColor" fill="transparent" r="63"
                                        cx="75" cy="75" />
                                </svg>
                                <span id="persen" class="absolute font-bold text-3xl text-[#d25525]">0%</span>
                            </div>
                            <span class="mt-5 font-bold text-2xl uppercase text-center">Baterai 2</span>
                            <span id="tegangan" class="mt-3 font-medium text-xl text-center">0 VDC</span>
                            <span id="rd" class="font-medium text-xl text-center">0 mOhm</span>
                        </div>
                    </div>
                    <div class="bg-[#252271] card hover:shadow-2xl transition-all duration-200 ease-out">
                        <div class="flex flex-col items-center mx-10 my-7">
                            <div class="w-[150px] h-[150px] rounded-full flex items-center justify-center bg-white">
                                <svg class="-rotate-90 w-[150px] h-[150px]">
                                    <circle style="color: #ffff;" stroke-width="10" stroke="currentColor"
                                        fill="transparent" r="63" cx="75" cy="75" />
                                    <circle style="color: #d25525;" stroke-width="12"
                                        stroke-dasharray="{{ $circumference }}" stroke-dashoffset="{{ $progress }}"
                                        stroke-linecap="round" stroke="currentColor" fill="transparent" r="63"
                                        cx="75" cy="75" />
                                </svg>
                                <span id="persen" class="absolute font-bold text-3xl text-[#d25525]">0%</span>
                            </div>
                            <span class="mt-5 font-bold text-2xl uppercase text-center">Baterai 3</span>
                            <span id="tegangan" class="mt-3 font-medium text-xl text-center">0 VDC</span>
                            <span id="rd" class="font-medium text-xl text-center">0 mOhm</span>
                        </div>
                    </div>
                    <div class="bg-[#252271] card hover:shadow-2xl transition-all duration-200 ease-out">
                        <div class="flex flex-col items-center mx-10 my-7">
                            <div class="w-[150px] h-[150px] rounded-full flex items-center justify-center bg-white">
                                <svg class="-rotate-90 w-[150px] h-[150px]">
                                    <circle style="color: #ffff;" stroke-width="10" stroke="currentColor"
                                        fill="transparent" r="63" cx="75" cy="75" />
                                    <circle style="color: #d25525;" stroke-width="12"
                                        stroke-dasharray="{{ $circumference }}"
                                        stroke-dashoffset="{{ $progress }}" stroke-linecap="round"
                                        stroke="currentColor" fill="transparent" r="63" cx="75"
                                        cy="75" />
                                </svg>
                                <span id="persen" class="absolute font-bold text-3xl text-[#d25525]">0%</span>
                            </div>
                            <span class="mt-5 font-bold text-2xl uppercase text-center">Baterai 4</span>
                            <span id="tegangan" class="mt-3 font-medium text-xl text-center">0 VDC</span>
                            <span id="rd" class="font-medium text-xl text-center">0 mOhm</span>
                        </div>
                    </div>
                    <div class="bg-[#252271] card hover:shadow-2xl transition-all duration-200 ease-out">
                        <div class="flex flex-col items-center mx-10 my-7">
                            <div class="w-[150px] h-[150px] rounded-full flex items-center justify-center bg-white">
                                <svg class="-rotate-90 w-[150px] h-[150px]">
                                    <circle style="color: #ffff;" stroke-width="10" stroke="currentColor"
                                        fill="transparent" r="63" cx="75" cy="75" />
                                    <circle style="color: #d25525;" stroke-width="12"
                                        stroke-dasharray="{{ $circumference }}"
                                        stroke-dashoffset="{{ $progress }}" stroke-linecap="round"
                                        stroke="currentColor" fill="transparent" r="63" cx="75"
                                        cy="75" />
                                </svg>
                                <span id="persen" class="absolute font-bold text-3xl text-[#d25525]">0%</span>
                            </div>
                            <span class="mt-5 font-bold text-2xl uppercase text-center">Baterai 5</span>
                            <span id="tegangan" class="mt-3 font-medium text-xl text-center">0 VDC</span>
                            <span id="rd" class="font-medium text-xl text-center">0 mOhm</span>
                        </div>
                    </div>
                    <div class="bg-[#252271] card hover:shadow-2xl transition-all duration-200 ease-out">
                        <div class="flex flex-col items-center mx-10 my-7">
                            <div class="w-[150px] h-[150px] rounded-full flex items-center justify-center bg-white">
                                <svg class="-rotate-90 w-[150px] h-[150px]">
                                    <circle style="color: #ffff;" stroke-width="10" stroke="currentColor"
                                        fill="transparent" r="63" cx="75" cy="75" />
                                    <circle style="color: #d25525;" stroke-width="12"
                                        stroke-dasharray="{{ $circumference }}"
                                        stroke-dashoffset="{{ $progress }}" stroke-linecap="round"
                                        stroke="currentColor" fill="transparent" r="63" cx="75"
                                        cy="75" />
                                </svg>
                                <span id="persen" class="absolute font-bold text-3xl text-[#d25525]">0%</span>
                            </div>
                            <span class="mt-5 font-bold text-2xl uppercase text-center">Baterai 6</span>
                            <span id="tegangan" class="mt-3 font-medium text-xl text-center">0 VDC</span>
                            <span id="rd" class="font-medium text-xl text-center">0 mOhm</span>
                        </div>
                    </div>
                    <div class="bg-[#252271] card hover:shadow-2xl transition-all duration-200 ease-out">
                        <div class="flex flex-col items-center mx-10 my-7">
                            <div class="w-[150px] h-[150px] rounded-full flex items-center justify-center bg-white">
                                <svg class="-rotate-90 w-[150px] h-[150px]">
                                    <circle style="color: #ffff;" stroke-width="10" stroke="currentColor"
                                        fill="transparent" r="63" cx="75" cy="75" />
                                    <circle style="color: #d25525;" stroke-width="12"
                                        stroke-dasharray="{{ $circumference }}"
                                        stroke-dashoffset="{{ $progress }}" stroke-linecap="round"
                                        stroke="currentColor" fill="transparent" r="63" cx="75"
                                        cy="75" />
                                </svg>
                                <span id="persen" class="absolute font-bold text-3xl text-[#d25525]">0%</span>
                            </div>
                            <span class="mt-5 font-bold text-2xl uppercase text-center">Baterai 7</span>
                            <span id="tegangan" class="mt-3 font-medium text-xl text-center">0 VDC</span>
                            <span id="rd" class="font-medium text-xl text-center">0 mOhm</span>
                        </div>
                    </div>
                    <div class="bg-[#252271] card hover:shadow-2xl transition-all duration-200 ease-out">
                        <div class="flex flex-col items-center mx-10 my-7">
                            <div class="w-[150px] h-[150px] rounded-full flex items-center justify-center bg-white">
                                <svg class="-rotate-90 w-[150px] h-[150px]">
                                    <circle style="color: #ffff;" stroke-width="10" stroke="currentColor"
                                        fill="transparent" r="63" cx="75" cy="75" />
                                    <circle style="color: #d25525;" stroke-width="12"
                                        stroke-dasharray="{{ $circumference }}"
                                        stroke-dashoffset="{{ $progress }}" stroke-linecap="round"
                                        stroke="currentColor" fill="transparent" r="63" cx="75"
                                        cy="75" />
                                </svg>
                                <span id="persen" class="absolute font-bold text-3xl text-[#d25525]">0%</span>
                            </div>
                            <span class="mt-5 font-bold text-2xl uppercase text-center">Baterai 8</span>
                            <span id="tegangan" class="mt-3 font-medium text-xl text-center">0 VDC</span>
                            <span id="rd" class="font-medium text-xl text-center">0 mOhm</span>
                        </div>
                    </div>
                    <div class="bg-[#252271] card hover:shadow-2xl transition-all duration-200 ease-out">
                        <div class="flex flex-col items-center mx-10 my-7">
                            <div class="w-[150px] h-[150px] rounded-full flex items-center justify-center bg-white">
                                <svg class="-rotate-90 w-[150px] h-[150px]">
                                    <circle style="color: #ffff;" stroke-width="10" stroke="currentColor"
                                        fill="transparent" r="63" cx="75" cy="75" />
                                    <circle style="color: #d25525;" stroke-width="12"
                                        stroke-dasharray="{{ $circumference }}"
                                        stroke-dashoffset="{{ $progress }}" stroke-linecap="round"
                                        stroke="currentColor" fill="transparent" r="63" cx="75"
                                        cy="75" />
                                </svg>
                                <span id="persen" class="absolute font-bold text-3xl text-[#d25525]">0%</span>
                            </div>
                            <span class="mt-5 font-bold text-2xl uppercase text-center">Baterai 9</span>
                            <span id="tegangan" class="mt-3 font-medium text-xl text-center">0 VDC</span>
                            <span id="rd" class="font-medium text-xl text-center">0 mOhm</span>
                        </div>
                    </div>
                    <div class="bg-[#252271] card hover:shadow-2xl transition-all duration-200 ease-out">
                        <div class="flex flex-col items-center mx-10 my-7">
                            <div class="w-[150px] h-[150px] rounded-full flex items-center justify-center bg-white">
                                <svg class="-rotate-90 w-[150px] h-[150px]">
                                    <circle style="color: #ffff;" stroke-width="10" stroke="currentColor"
                                        fill="transparent" r="63" cx="75" cy="75" />
                                    <circle style="color: #d25525;" stroke-width="12"
                                        stroke-dasharray="{{ $circumference }}"
                                        stroke-dashoffset="{{ $progress }}" stroke-linecap="round"
                                        stroke="currentColor" fill="transparent" r="63" cx="75"
                                        cy="75" />
                                </svg>
                                <span id="persen" class="absolute font-bold text-3xl text-[#d25525]">0%</span>
                            </div>
                            <span class="mt-5 font-bold text-2xl uppercase text-center">Baterai 10</span>
                            <span id="tegangan" class="mt-3 font-medium text-xl text-center">0 VDC</span>
                            <span id="rd" class="font-medium text-xl text-center">0 mOhm</span>
                        </div>
                    </div>
                    <div class="bg-[#252271] card hover:shadow-2xl transition-all duration-200 ease-out">
                        <div class="flex flex-col items-center mx-10 my-7">
                            <div class="w-[150px] h-[150px] rounded-full flex items-center justify-center bg-white">
                                <svg class="-rotate-90 w-[150px] h-[150px]">
                                    <circle style="color: #ffff;" stroke-width="10" stroke="currentColor"
                                        fill="transparent" r="63" cx="75" cy="75" />
                                    <circle style="color: #d25525;" stroke-width="12"
                                        stroke-dasharray="{{ $circumference }}"
                                        stroke-dashoffset="{{ $progress }}" stroke-linecap="round"
                                        stroke="currentColor" fill="transparent" r="63" cx="75"
                                        cy="75" />
                                </svg>
                                <span id="persen" class="absolute font-bold text-3xl text-[#d25525]">0%</span>
                            </div>
                            <span class="mt-5 font-bold text-2xl uppercase text-center">Baterai 11</span>
                            <span id="tegangan" class="mt-3 font-medium text-xl text-center">0 VDC</span>
                            <span id="rd" class="font-medium text-xl text-center">0 mOhm</span>
                        </div>
                    </div>
                    <div class="bg-[#252271] card hover:shadow-2xl transition-all duration-200 ease-out">
                        <div class="flex flex-col items-center mx-10 my-7">
                            <div class="w-[150px] h-[150px] rounded-full flex items-center justify-center bg-white">
                                <svg class="-rotate-90 w-[150px] h-[150px]">
                                    <circle style="color: #ffff;" stroke-width="10" stroke="currentColor"
                                        fill="transparent" r="63" cx="75" cy="75" />
                                    <circle style="color: #d25525;" stroke-width="12"
                                        stroke-dasharray="{{ $circumference }}"
                                        stroke-dashoffset="{{ $progress }}" stroke-linecap="round"
                                        stroke="currentColor" fill="transparent" r="63" cx="75"
                                        cy="75" />
                                </svg>
                                <span id="persen" class="absolute font-bold text-3xl text-[#d25525]">0%</span>
                            </div>
                            <span class="mt-5 font-bold text-2xl uppercase text-center">Baterai 12</span>
                            <span id="tegangan" class="mt-3 font-medium text-xl text-center">0 VDC</span>
                            <span id="rd" class="font-medium text-xl text-center">0 mOhm</span>
                        </div>
                    </div>
                    <div class="bg-[#252271] card hover:shadow-2xl transition-all duration-200 ease-out">
                        <div class="flex flex-col items-center mx-10 my-7">
                            <div class="w-[150px] h-[150px] rounded-full flex items-center justify-center bg-white">
                                <svg class="-rotate-90 w-[150px] h-[150px]">
                                    <circle style="color: #ffff;" stroke-width="10" stroke="currentColor"
                                        fill="transparent" r="63" cx="75" cy="75" />
                                    <circle style="color: #d25525;" stroke-width="12"
                                        stroke-dasharray="{{ $circumference }}"
                                        stroke-dashoffset="{{ $progress }}" stroke-linecap="round"
                                        stroke="currentColor" fill="transparent" r="63" cx="75"
                                        cy="75" />
                                </svg>
                                <span id="persen" class="absolute font-bold text-3xl text-[#d25525]">0%</span>
                            </div>
                            <span class="mt-5 font-bold text-2xl uppercase text-center">Baterai 13</span>
                            <span id="tegangan" class="mt-3 font-medium text-xl text-center">0 VDC</span>
                            <span id="rd" class="font-medium text-xl text-center">0 mOhm</span>
                        </div>
                    </div>
                    <div class="bg-[#252271] card hover:shadow-2xl transition-all duration-200 ease-out">
                        <div class="flex flex-col items-center mx-10 my-7">
                            <div class="w-[150px] h-[150px] rounded-full flex items-center justify-center bg-white">
                                <svg class="-rotate-90 w-[150px] h-[150px]">
                                    <circle style="color: #ffff;" stroke-width="10" stroke="currentColor"
                                        fill="transparent" r="63" cx="75" cy="75" />
                                    <circle style="color: #d25525;" stroke-width="12"
                                        stroke-dasharray="{{ $circumference }}"
                                        stroke-dashoffset="{{ $progress }}" stroke-linecap="round"
                                        stroke="currentColor" fill="transparent" r="63" cx="75"
                                        cy="75" />
                                </svg>
                                <span id="persen" class="absolute font-bold text-3xl text-[#d25525]">0%</span>
                            </div>
                            <span class="mt-5 font-bold text-2xl uppercase text-center">Baterai 14</span>
                            <span id="tegangan" class="mt-3 font-medium text-xl text-center">0 VDC</span>
                            <span id="rd" class="font-medium text-xl text-center">0 mOhm</span>
                        </div>
                    </div>
                    <div class="bg-[#252271] card hover:shadow-2xl transition-all duration-200 ease-out">
                        <div class="flex flex-col items-center mx-10 my-7">
                            <div class="w-[150px] h-[150px] rounded-full flex items-center justify-center bg-white">
                                <svg class="-rotate-90 w-[150px] h-[150px]">
                                    <circle style="color: #ffff;" stroke-width="10" stroke="currentColor"
                                        fill="transparent" r="63" cx="75" cy="75" />
                                    <circle style="color: #d25525;" stroke-width="12"
                                        stroke-dasharray="{{ $circumference }}"
                                        stroke-dashoffset="{{ $progress }}" stroke-linecap="round"
                                        stroke="currentColor" fill="transparent" r="63" cx="75"
                                        cy="75" />
                                </svg>
                                <span id="persen" class="absolute font-bold text-3xl text-[#d25525]">0%</span>
                            </div>
                            <span class="mt-5 font-bold text-2xl uppercase text-center">Baterai 15</span>
                            <span id="tegangan" class="mt-3 font-medium text-xl text-center">0 VDC</span>
                            <span id="rd" class="font-medium text-xl text-center">0 mOhm</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
