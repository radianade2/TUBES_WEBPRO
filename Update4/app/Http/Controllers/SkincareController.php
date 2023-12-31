<?php

namespace App\Http\Controllers;

use App\Models\Skincare;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;


class SkincareController extends Controller
{
    public function index()
    {
        // Tampilkan semua produk skincare
        $skincare = Skincare::all();
        return view('skincare.index', ['skincare' => $skincare]);
    }

    public function halaman_form()
    {
        return view('skincare.recommendation');
    }

    public function recommendation(Request $request)
    {
        $gender = $request->input('gender');
        $skintype = $request->input('skintype');

        // Cek kriteria gender dan skintype yang dipilih
        if ($gender == 'female' && $skintype == 'oily') {
            // Ambil rekomendasi produk dengan ID 1
            $recommendation = Skincare::findOrFail(1);
            return view('skincare.show', ['skincare' => $recommendation]);
        } else {
            $recommendation = Skincare::findOrFail(2);;
            return view('skincare.show', ['skincare' => $recommendation]);
        }
    }

    public function show($id)
    {
        // Tampilkan detail produk skincare berdasarkan ID
        $skincare = Skincare::find($id);
        return view('skincare.show', ['skincare' => $skincare]);
    }


}
