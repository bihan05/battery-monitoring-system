<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\BmsModel;
use App\Models\BmsModel_Mggr;
use Illuminate\Http\Request;

class ApiBmsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $baterai = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15];
        $result = [];
        foreach ($baterai as $b) {
            $tanjungpriok = BmsModel::where('baterai', $b)
                ->latest()
                ->first();
            if ($tanjungpriok) {
                $result[] = $tanjungpriok;
            }
        }

        return $result;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store()
    {
        $tp = BmsModel::create([
            'baterai' => request('baterai'),
            'tegangan' => request('tegangan'),
            'hambatan_dalam' => request('rd'),
            'persen' => request('persen'),
        ]);

        return response()->json(
            [
                'success' => true,
                'message' => 'Data Berhasil Disimpan',
                'tp' => $tp,
            ],
            200,
        );
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        $baterai = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
        $result = [];

        foreach ($baterai as $b) {
            // Menggunakan method get() untuk mendapatkan hasil query
            $baterai1 = BmsModel::where('baterai', $b)->get();

            // Menggunakan isEmpty() untuk mengecek apakah hasil query kosong
            if (!$baterai1->isEmpty()) {
                $result[] = $baterai1;
            }
        }

        // Menggunakan response()->json() untuk mengembalikan data dalam format JSON
        return response()->json($result);
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
