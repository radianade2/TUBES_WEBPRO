<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\Skincare;

class SkincareController extends Controller {
    public function face(){
        return view('try');
    }

    public function halaman_form(){
        return view('try2');
    }

    public function halaman_hasil($kesimpulan){
        // Mengambil semua data dari tabel 'datajawaban_tubeswebpro'
        $skincareData = Skincare::all();
        // Lakukan operasi lain sesuai kebutuhan Anda
        return view('try3', ['kesimpulan' => $kesimpulan, 'skincareData' => $skincareData]);
    }

    public function prosesInput(Request $request){
        // Ambil input dari form
        $cityinput = $request->input('cityinput');
        $weatherID = env('WEATHER_ID');
        $cuaca = Http::get("https://api.openweathermap.org/data/2.5/weather?q=${cityinput}&appid=$weatherID");
        dd($cuaca);

        $tempKelvin = $cuaca['main']['temp'];
        $temp = $tempKelvin - 273.15;
        $gender = $request->input('gender_input');
        $skintype = $request->input('skin_input');
        $sens = (int) $request->input('sens_input');
        $act = $request->input('door_input');
        $preg = $request->input('preg_input');
        $sun = $request->input('sun_input');

        // Logika bisnis untuk menghasilkan kesimpulan
        // Logika bisnis Anda di sini, sesuaikan dengan kebutuhan Anda
        // Misalnya, menggunakan if, switch, atau metode lainnya
        if($gender=='FEMALE' && $preg == 'YES' && $sun == 'YES' && ($sens == 4 || $sens == 5) && ($act == 1 || $act == 2 || $act == 3) && $skintype == 'OILY' && $temp>=25){
            $moist = "Skintific 5X Ceramide Barrier Repair Moisture Gel Moisturizer";
            $serum = "The Ordinary Hyaluronic Acid 2% + B5";
            $ss = "Holyshield! UV Matery Sunscreen gel spf 50+ PA++++";
        }else{
            if($sun == 'YES' && $skintype == 'DRY' && ($sens == 4 || $sens == 5) && ($act == 1 || $act == 2 || $act == 3) && $temp>=25){
                $moist = "Avoskin Your skin bae Glow Concentrate Treatment ";
                $serum = "NPure Triphase serum marigold";
                $ss = "NPure Sunscreen Cica Beat the sun";
            }else{
                if($skintype == 'DRY'){
                    if(($act == 1 || $act == 2 || $act == 3) && $temp<25){
                        $moist = "CeraVe Moisturizing Cream";
                        $serum = "Hada Labo Gokujyun Hyaluronic Acid Lotion";
                        $ss = "Neutrogena Hydro Boost Water Gel Lotion SPF 30";
                    }else if(($act == 4 || $act == 5) && $temp>=25){
                        $moist = "La Roche Posay Effaclar";
                        $serum = "The Ordinary Hyaluronic Acid 2% + B5";
                        $ss = "CeraVe Hydrating Mineral Sunscreen SPF 30";
                    }
                } else if($skintype == 'OILY'){
                    if(($act == 1 || $act == 2 || $act == 3) && $temp<25){
                        $moist = "Cetaphil Pro Oil Absorbing Moisturizer";
                        $serum = "The Ordinary Niacinamide 10% + Zinc 1%";
                        $ss = "Biore UV Aqua Rich Watery Essence SPF 50+ PA++++";
                    }else if(($act == 4 || $act == 5) && $temp>=25){
                        $moist = "Skintific 5X Ceramide Barrier Repair Moisture Gel Moisturizer";
                        $serum = "The Ordinary Hyaluronic Acid 2% + B5";
                        $ss = "Facetology Triple care sunscreen";
                    }
                }else{
                    //untuk tidak ada kondisi khusus
                    $moist = "nanana";
                    $serum = "nanana";
                    $ss = "nanana";
                }
            }
        }

        $kesimpulan = [
            'moist' => $moist ?? null,
            'serum' => $serum ?? null,
            'ss' => $ss ?? null,
        ];

        // Kirim kesimpulan ke halaman berikutnya
        return redirect()->route('halaman_hasil', ['kesimpulan' => $kesimpulan]);
    }


}
