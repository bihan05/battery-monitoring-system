<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\BmsModel_Mggr;
use Illuminate\Http\Request;

class ApiControllerMggr extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $baterai = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15];
        $result = [];
        foreach ($baterai as $b) {
            $data = BmsModel_Mggr::where('baterai', $b)
                ->latest()
                ->first();
            if ($data) {
                $result[] = $data;
            }
        }
        return $result;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store()
    {
        $mggr = BmsModel_Mggr::create([
            'baterai' => request('baterai'),
            'tegangan' => request('tegangan'),
            'hambatan_dalam' => request('rd'),
            'persen' => request('persen'),
        ]);

        return response()->json(
            [
                'success' => true,
                'message' => 'Data Berhasil Disimpan',
                'data' => $mggr,
            ],
            200,
        );
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
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
