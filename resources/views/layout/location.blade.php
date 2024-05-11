<div id="location" class="w-full min-h-screen flex flex-col bg-primary">
    <div class="text-center mb-20">
        <h1 class="font-bold text-6xl text-white pt-10">Location</h1>

    </div>
    <div class="flex items-center justify-center">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-[60px] mx-10">
            @foreach ($stasiun as $item)
                @php
                    $lokasi = $item->lokasi;
                    $kode = $item->kode_lokasi;
                @endphp
                <a href="data/{{ $kode }}"
                    class="bg-white card hover:shadow-2xl active:scale-95 transition-all duration-200 ease-out hover:scale-105">
                    <div class="p-5 flex flex-col text-center">
                        <div class="rounded-xl overflow-hidden">
                            <img src="assets/image.jpg" />
                        </div>
                        <h5 class="text-xl md:text-2xl font-medium mt-3">
                            Stasiun {{ $lokasi }}
                        </h5>
                        <i class="fa-solid fa-angle-down mt-7 fa-lg"></i>
                    </div>
                </a>
            @endforeach
        </div>
    </div>
</div>
