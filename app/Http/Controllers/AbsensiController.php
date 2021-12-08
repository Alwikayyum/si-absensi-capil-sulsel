<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Absensi;



class AbsensiController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function absensi()
    {
        // dd();
        $title = 'Absensi';
        $this->timeZone('Asia/Jakarta');
        $user_id = auth()->user()->id;
        $date = date("Y-m-d");
        $cek_absen = Absensi::where(['user_id' => $user_id, 'date' => $date])
                            ->get()
                            ->first();
        

        if (is_null($cek_absen)) {
            $info = array(
                "status" => "Anda belum mengisi absensi!",
                "buttonIn" => "",
                "buttonOut" => "disabled");
        } elseif ($cek_absen->time_out == NULL) {
            $info = array(
                "status" => "Jangan lupa absen keluar",
                "buttonIn" => "disabled",
                "buttonOut" => "");
        } else {
            $info = array(
                "status" => "Absensi hari ini telah selesai!",
                "buttonIn" => "disabled",
                "buttonOut" => "disabled");
        }

        // $data = [
        //     'title' => 'Absensi',

        //     'data_absen' => Absensi::where(['user_id' => $user_id ])
        //     ->orderBy('time_out', 'DESC')
        //     ->paginate(20)
        // ];

        // return view('absensi', $data);
        
        $data_absen = Absensi::where('user_id', $user_id)
                        ->orderBy('time_out', 'desc')
                        ->paginate(20);
        // $time_in = Absensi::where('user_id', $user_id)->orderBy('time_in');
        // $time_out = Absensi::where('user_id', $user_id)->orderBy('time_out');
        // $reporting = Absensi::where('user_id', $user_id)->orderBy('reporting');
        
        return view('absensi', compact('data_absen', 'info', 'title'));

    }

    public function timeZone($location){
        return date_default_timezone_set($location);
    }

    
    // public function index(Request $request)
    // {
    //     $this->timeZone('Asia/Jakarta');
    //     $user_id = auth()->user()->id;
    //     $date = date("Y-m-d");
    //     $cek_absen = Absensi::where(['user_id' => $user_id, 'date' => $date])
    //                         ->get()
    //                         ->first();
    //     if (is_null($cek_absen)) {
    //         $info = array(
    //             "status" => "Anda belum mengisi absensi!",
    //             "buttonIn" => "",
    //             "buttonOut" => "disabled");
    //     } elseif ($cek_absen->time_out == NULL) {
    //         $info = array(
    //             "status" => "Jangan lupa absen keluar",
    //             "buttonIn" => "disabled",
    //             "buttonOut" => "");
    //     } else {
    //         $info = array(
    //             "status" => "Absensi hari ini telah selesai!",
    //             "buttonIn" => "disabled",
    //             "buttonOut" => "disabled");
    //     }

    //     $data = [
    //         'info' => $info,
    //         'data_absen' => Absensi::where(['user_id' => $user_id ])
    //         ->orderBy('time_out', 'reporting')
    //         ->paginate(20)
    //     ];
        
    //     $data_absen = Absensi::where('user_id', $user_id)
    //                     ->orderBy('time_out', 'desc')
    //                     ->paginate(20);
    //     $data_absen = Absensi::where(['user_id' => $user_id ])
    //                     ->orderBy('time_out', 'reporting')
    //                     ->paginate(20);
    //     dd($data);
    //     return view('absensi', $data);
    // }
    
    public function absen(Request $request)
    {
        $this->timeZone('Asia/Jakarta');
        $user_id = auth()->user()->id;
        $date = date("Y-m-d");
        $time = date("H:i:s");
        $reporting = $request->reporting;


        $absensi = new Absensi;
        if (isset($request->buttonIn)){

            $cek_double = $absensi->where(['date'=> $date, 'user_id' => $user_id])->count();

            if ($cek_double >0 ){
                return redirect()->back();
                // return view('absensi');
            }

            $absensi->create([
                'user' => $user_id,
                'date' => $date,
                'time_in' => $time,
                // 'reporting' => $reporting   
            ]);

            return redirect()->back();
            // return view('absensi');
        }
        elseif (isset($request->buttonOut)){
            $absensi->where(['date' => $date, 'user_id' => $user_id])
            ->update([
                'time_out' => $time,
                'reporting' => $reporting   
            ]);
            return redirect()->back();  
            // return view('absensi');

        } 

        // return $request->all();
        // return $request->$date;
    }
}
