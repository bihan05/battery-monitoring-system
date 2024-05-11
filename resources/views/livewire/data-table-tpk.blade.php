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
