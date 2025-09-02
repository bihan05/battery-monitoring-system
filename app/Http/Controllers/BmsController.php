<?php

namespace App\Http\Controllers;

use App\Models\BmsModel;
use App\Models\locationModel;
use GuzzleHttp\Client;
use Illuminate\Http\Request;

class BmsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function tpk()
    {
        $client = new Client();
        // // $url = 'http://localhost/main-project-bms/public/api/data/tp';
        // $response = $client->request('GET', $url);
        // $content = $response->getBody()->getContents();
        // $contentArray = json_decode($content, true);
        // // dd($contentArray);
        return view('lokasi.tpk');
    }

    public function mri()
    {
        $client = new Client();
        $url = 'http://localhost/main-project-bms/public/api/data/mggr';
        $response = $client->request('GET', $url);
        $content = $response->getBody()->getContents();
        $contentArray = json_decode($content, true);
        // dd($contentArray);
        return view('lokasi.mggr', ['data' => $contentArray]);
    }

    /**
     * Show the form for creating a new resource.
     */
    // file controller
    public function locate()
    {
        $lokasi = locationModel::get();

        // dd($lokasi);
        return view('layout.main', [
            'stasiun' => $lokasi,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */

    public function data()
    {
        $data = BmsModel::all();

        return view('data.datatp', [
            'tpkData' => $data,
        ]);
        // return response()->json($data);
    }

    public function search(Request $request)
    {
        // Retrieve values from the form
        $sortOption = $request->sort;
        $bateraiLevel = $request->baterai;
        $tanggal = $request->tanggal;

        // Initialize $data before conditions
        $data = BmsModel::query();

        // Example: Sorting based on the selected option
        if ($sortOption == 'baru') {
            // Handle sorting for the newest data
            $data->orderBy('created_at', 'desc');
        } elseif ($sortOption == 'lama') {
            // Handle sorting for the oldest data
            $data->orderBy('created_at', 'asc');
        }

        // Example: Filter based on battery level
        if ($bateraiLevel !== null) {
            if ($bateraiLevel == 0) {
            } else {
                // Handle filtering based on battery level
                $data->where('baterai', $bateraiLevel);
            }
        }

        // Example: Filter based on the selected date
        if ($tanggal !== null) {
            // Handle filtering based on the selected date
            $data->whereDate('created_at', $tanggal);
        }

        // Get the final result after applying all conditions
        $result = $data->get();

        // Perform further actions or return a response as needed
        // For example, you might pass the $result to a view or return it as JSON
        return view('data.datatp', [
            'sortOption' => $sortOption,
            'bateraiLevel' => $bateraiLevel,
            'tanggal' => $tanggal,
            'tpkData' => $result,
        ]);
    }
}
