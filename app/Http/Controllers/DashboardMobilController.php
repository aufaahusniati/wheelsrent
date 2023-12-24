<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Http;

class DashboardMobilController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $response = DashboardMobilController::fetchData();
        $cars = json_decode($response);

        $view_data = [
            'cars' => $cars->results
        ];
        // dd($view_data);
        return view('dashboard.posts.index', $view_data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.posts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    // public function store(Request $request)
    // {
    //     //
    // }

    // /**
    //  * Display the specified resource.
    //  */
    public function show()
    {
        return view('dashboard.posts.show');
    }

    // /**
    //  * Show the form for editing the specified resource.
    //  */
    public function edit()
    {
        return view('dashboard.posts.edit');
    }
    // public function edit(Post $post)
    // {
    //     //
    // }

    // /**
    //  * Update the specified resource in storage.
    //  */
    // public function update(Request $request, Post $post)
    // {
    //     //
    // }

    // /**
    //  * Remove the specified resource from storage.
    //  */
    // public function destroy(Post $post)
    // {
    //     //
    // }


    public function fetchData()
    {
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://data.opendatasoft.com/api/explore/v2.1/catalog/datasets/all-vehicles-model@public/records?select=make%2C%20model%2C%20year%2C%20trany%2C%20fueltype&limit=20",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => array(
                "Cache-Control: no-cache",
            ),
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
            echo "cURL Error #:" . $err;
        } else {
            return $response;
        }
    }
    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'make' => 'required',
            'model' => 'required',
            'year' => 'required|numeric',
            'trany' => 'required',
            'fueltype' => 'required',
            // Aturan validasi lainnya
        ]);
        // Menggunakan HTTP Client untuk mengirim POST request ke API
        $response = Http::post('https://data.opendatasoft.com/api/explore/v2.1/catalog/datasets/all-vehicles-model@public/records', [
            'make' => $request->input('make'),
            'model' => $request->input('model'),
            'year' => $request->input('year'),
            'trany' => $request->input('trany'),
            'fueltype' => $request->input('fueltype'),
            // ... tambahkan field lainnya sesuai kebutuhan
        ]);

        // Handle response dari API
        if ($response->successful()) {
            // Data berhasil disimpan
            return Redirect::route('posts.index');
        } else {
            // Ada kesalahan, handle sesuai kebutuhan
            return back()->with('error', 'Failed to save data to the API');
        }
    }

    public function update(Request $request, $id)
    {
        // Menggunakan HTTP Client untuk mengirim PUT request ke API
        $response = Http::put("https://data.opendatasoft.com/api/explore/v2.1/catalog/datasets/all-vehicles-model@public/records/{$id}", [
            'make' => $request->input('make'),
            'model' => $request->input('model'),
            'year' => $request->input('year'),
            'trany' => $request->input('trany'),
            'fueltype' => $request->input('fueltype'),
            // ... tambahkan field lainnya sesuai kebutuhan
        ]);

        // Handle response dari API

        return Redirect::route('posts.index');
    }

    public function destroy($id)
    {
        // Menggunakan HTTP Client untuk mengirim DELETE request ke API
        $response = Http::delete("https://data.opendatasoft.com/api/explore/v2.1/catalog/datasets/all-vehicles-model@public/records/{$id}");

        // Handle response dari API

        return Redirect::route('posts.index');
    }
}
