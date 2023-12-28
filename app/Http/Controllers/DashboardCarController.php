<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\Make;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use FPDF;

class DashboardCarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.car.index', [
            'makes' => Make::all(),
            'cars' => Car::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.car.create', [
            'makes' => Make::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'model' => 'required|max:255',
            'year' => 'required|max:255',
            'transmission' => 'required|max:255',
            'fuel' => 'required|max:255',
            'price' => 'required',
            'image' => 'image|file|max:1024',
            'make_id' => 'required',
        ]);

        if ($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('car-images');
        }

        Car::create($validatedData);

        return redirect('/dashboard/car')->with('success', 'New Car Data has been added!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Car $car)
    {
        return view('dashboard.car.show', [
            'car' => $car
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Car $car)
    {
        return view('dashboard.car.edit', [
            'car' => $car,
            'makes' => Make::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Car $car)
    {
        $rules = [
            'model' => 'required|max:255',
            'year' => 'required|max:255',
            'transmission' => 'required|max:255',
            'fuel' => 'required|max:255',
            'price' => 'required',
            'image' => 'image|file|max:1024',
            'make_id' => 'required',
        ];

        $validatedData = $request->validate($rules);

        if ($request->file('image')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validatedData['image'] = $request->file('image')->store('car-images');
        }

        Car::where('id', $car->id)
            ->update($validatedData);

        return redirect('/dashboard/car')->with('success', 'Car data has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Car $car)
    {
        if ($car->image) {
            Storage::delete($car->image);
        }
        Car::destroy($car->id);

        return redirect('/dashboard/car')->with('success', 'Post has been deleted!');
    }

    public function generatePDF($id)
    {
        // Logic untuk mengambil data mobil dari database (sesuaikan dengan model dan database Anda)
        $car = Car::find($id);

        // Check if $car is null
        if (!$car) {
            // Handle the case where the car is not found
            abort(404); // or redirect, show an error page, etc.
        }

        // Buat instance PDF dengan library fpdf
        $pdf = new FPDF();
        $pdf->AddPage();

        // Tambahkan konten ke PDF
        $pdf->SetFont('Arial', 'B', 16);
        $pdf->Cell(40, 10, 'Car Detail Report');

        // Tambahkan data mobil ke PDF
        $pdf->SetFont('Arial', '', 12);
        $pdf->Ln(); // Pindah ke baris berikutnya
        $pdf->Cell(40, 10, 'Make: ' . ($car->makes ? $car->makes->make_name : 'N/A'));
        $pdf->Ln();
        $pdf->Cell(40, 10, 'Model: ' . $car->model);
        $pdf->Ln();
        $pdf->Cell(40, 10, 'Year: ' . $car->year);
        $pdf->Ln();
        $pdf->Cell(40, 10, 'Transmission: ' . $car->transmission);
        $pdf->Ln();
        $pdf->Cell(40, 10, 'Fuel: ' . $car->fuel);
        $pdf->Ln();
        $pdf->Cell(40, 10, 'Price: ' . $car->price);
        // Tambahkan sisa data sesuai kebutuhan
        if ($car->image) {
            $pdf->Ln();
            $pdf->Cell(40, 10, 'Image:');
            $pdf->Ln();
            $pdf->Image(public_path('storage/' . $car->image), null, null, 50, 50); // Adjust dimensions as needed
        }
        // Simpan PDF ke file atau kirim ke browser
        $pdf->Output();

        // Jangan lupa untuk mengembalikan response kosong karena sudah mengeluarkan output langsung ke browser
        return response()->make('', 200);
    }
}
