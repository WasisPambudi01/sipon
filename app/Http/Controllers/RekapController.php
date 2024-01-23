<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Santri;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class RekapController extends Controller
{
    public function index()
    {
        $start = Carbon::now()->subYear(1)->format('Y-m-d');
        $end = Carbon::now()->format('Y-m-d');
        // $santri = Santri::with(['absen' => function ($query) use ($start, $end) {
        //     $query->select('nis', 'id_act', 'date')
        //         ->whereBetween('date', [$start, $end])
        //         ->with("jenis");
        // }])->get();

        $santri = DB::table('absens')
            ->join('jenis_absens', 'jenis_absens.id_act', '=', 'absens.id_act')
            ->select('absens.*', 'jenis_absens.*')
            ->whereBetween('absens.date', [$start, $end])
            ->get();

        $jsonResult = json_encode($santri);

        return view('contents.rekap')->with(compact('santri'));
    }
}
