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
    {{-- DaisyUI --}}
    {{-- <link href="https://cdn.jsdelivr.net/npm/daisyui@4.6.1/dist/full.min.css" rel="stylesheet" type="text/css" /> --}}
    @livewireStyles()
</head>

<body>
    <div class="w-full h-auto min-h-screen flex flex-col">
        @include('layout.navbar2')
        <div class="container mt-[150px] flex flex-row items-center">
            <div class="font-bold text-3xl">Tabel Data Baterai</div>
            <div class="ml-3 font-bold text-2xl bg-[#d25525] rounded-full shadow-md px-4 py-2 text-white ">Tanjung Priok
            </div>
        </div>
        
        @livewire('data-table-tpk')
    </div>
    @livewireScripts()
</body>

</html>
