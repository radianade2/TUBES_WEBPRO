<?php

namespace App\Http\Controllers;

use App\Models\Skincare;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Cookie;



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
        $cityinput = $request->input('location');
        $apik = env('WEATHER_ID');
        $url = "https://api.openweathermap.org/data/2.5/weather?q=${cityinput}&appid=${apik}";
        $response = Http::get($url);
        $data = $response->json();

        $weatherDescription = $data['weather'][0]['description'];
        $weatherTemp = $data['main']['temp'];
        $weatherWindSpeed = $data['wind']['speed'];
        $temp = $weatherTemp - 273.15;

        $gender = $request->input('gender');
        $skintype = $request->input('skintype');
        $act = $request->input('act');
        $sens = $request->input('sens');
        $preg = $request->input('preg');
        $sun = $request->input('sun');

        // Simpan informasi cuaca dalam cookie
        // $minutes = 60;
        // Cookie::queue('weatherDescription', $weatherDescription, $minutes);
        // Cookie::queue('weatherTemp', $weatherTemp, $minutes);
        // Cookie::queue('weatherWindSpeed', $weatherWindSpeed, $minutes);

        // Cek kriteria gender dan skintype yang dipilih
        if ($gender == 'female' && $skintype == 'oily' && ($act == '1' || $act == '2' || $act == '3') && ($sens == '4' || $sens == '5') && $preg == 'Yes' && $sun == 'Yes' && $temp<=25.00) {
            // Ambil rekomendasi produk dengan ID 1
            $recommendation = Skincare::findOrFail(1);
            return view('skincare.show', [
                'skincare' => $recommendation,
                'weatherDescription' => $weatherDescription,
                'weatherTemp' => $weatherTemp,
                'weatherWindSpeed' => $weatherWindSpeed,
            ]);
        } else {
            $recommendation = Skincare::findOrFail(2);;
            return view('skincare.show', [
                'skincare' => $recommendation,
                'weatherDescription' => $weatherDescription,
                'weatherTemp' => $weatherTemp,
                'weatherWindSpeed' => $weatherWindSpeed,
            ]);
        }
    }

    public function show($id)
    {
        // Tampilkan detail produk skincare berdasarkan ID
        $skincare = Skincare::find($id);
        return view('skincare.show', ['skincare' => $skincare]);
    }


}
