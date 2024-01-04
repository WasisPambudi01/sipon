<?php

namespace App\Http\Controllers;

use App\Models\Santri;
use Carbon\Carbon;
use Illuminate\Http\Request;

class RekapController extends Controller
{
    public function index()
    {
        $start = Carbon::now()->format('Y-m-d');
        $end = Carbon::now()->subDay(10)->format('Y-m-d');
        $santri= Santri::with(['absen'=>function ($query)use($start,$end){
            $query->whereBetween('date',[$start,$end])
            ->groupBy('date');
        }])->get();
        return view('contents.rekap')->with(compact('santri'));
    }
}
