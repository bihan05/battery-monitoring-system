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
    @livewireStyles()
</head>

<body>
    <div class="w-full h-auto min-h-screen flex flex-col">
        @include('layout.navbar2')
        <div class="container mt-[150px] flex flex-row items-center">
            <div class="font-bold text-3xl">Tabel Data Baterai</div>
            <a href="{{ url('/data/tpk') }}"
                class="ml-3 font-bold text-xl bg-[#d25525] rounded-full shadow-md px-4 py-2 text-white hover:drop-shadow-[0_0px_4px_rgba(0,0,0,0.25)] active:scale-95 transition-all duration-200 ease-in-out"
                style="text-decoration: none">Tanjung Priok
            </a>
        </div>

        <form action="{{ route('search') }}" method="GET" class="container mx-auto flex flex-row items-center mt-10">
            <div class="flex flex-row relative items-center font-semibold text-xl">
                <div class="font-semibold text-xl mr-3 relative flex items-center">
                    Sort
                    <select id="sort" name="sort"
                        class="ml-3 block appearance-none bg-[#252271] font-semibold text-lg hover:drop-shadow-[0_0px_4px_rgba(0,0,0,0.25)] hover:scale-105 transition-all duration-200 ease-in-out text-white py-3 px-3 rounded-[15px] leading-tight focus:outline-none focus:bg-[#252271]">
                        <option value="baru" {{ (request('sort') == 'baru') ? 'selected' : '' }}>Data Terbaru</option>
                        <option value="lama" {{ (request('sort') == 'lama') ? 'selected' : '' }}>Data Lama</option>
                    </select>
                </div>
                <div class="font-semibold text-xl ml-12 relative flex items-center">
                    Baterai
                    <select id="baterai" name="baterai" class="ml-3 block appearance-none bg-[#252271] font-semibold text-lg hover:drop-shadow-[0_0px_4px_rgba(0,0,0,0.25)] hover:scale-105 transition-all duration-200 ease-in-out text-white py-3 px-3 rounded-[15px] leading-tight focus:outline-none focus:bg-[#252271]">
                        {{-- @php $selectedBaterai = ; @endphp --}}
                        @for ($i = 0; $i < 16; $i++)
                            <option value="{{ $i }}" {{ (old('baterai', request('baterai')) == $i) ? 'selected' : '' }}>{{ $i }}</option>
                        @endfor
                    </select>
                </div>
                <div class="font-semibold text-xl ml-12 relative flex items-center">
                    Tanggal
                    <input id="tanggal" type="date" name="tanggal"
                        class="ml-4 px-4 py-2 border rounded-xl focus:outline-none hover:scale-105 transition-all duration-200 ease-in-out bg-[#252271] text-white"
                        value="{{ request('tanggal') }}">
                </div>
                <div class="font-semibold text-xl ml-12 flex justify-end">
                    <button type="submit"
                        class="bg-[#d25525] rounded-xl px-3 py-2 text-white focus:outline-none hover:drop-shadow-[0_0px_4px_rgba(0,0,0,0.25)] hover:scale-105 active:scale-95 transition-all duration-200 ease-in-out">Search</button>
                </div>
            </div>
        </form>

        <div class="overflow-x-auto container my-10">
            <table class="table text-lg">
                <!-- head -->
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Baterai</th>
                        <th>Tegangan</th>
                        <th>Hambatan Dalam</th>
                        <th>Persen</th>
                        <th>Waktu</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($tpkData as $key => $item)
                        <tr class="hover:bg-slate-200 transition-all duration-200 ease-out">
                            <td>{{ ++$key }}</td>
                            <td>{{ $item->baterai }}</td>
                            <td>{{ $item->tegangan }}</td>
                            <td>{{ $item->hambatan_dalam }}</td>
                            <td>{{ $item->persen }}</td>
                            <td>{{ $item->created_at }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

    </div>
    @livewireScripts()
</body>

</html>
