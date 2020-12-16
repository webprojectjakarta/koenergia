<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use PDF;
use App\Contribution;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $data = DB::table('contribution')
        ->select(DB::raw("SUM(pohon) as pohon, SUM(kg) as kg,SUM(kwh) as kwh, SUM(rumah) as rumah, SUM(ltr) as ltr"))->get();
        
        return view('layouts.app',compact('data'));
        
    }
    public function store(Request $request)
    {
        $this->validate($request, [
            'number1' => 'required|string|max:255',
            'number2' => 'required|string|max:255',
        ]);
        $data = $request->input('number1');
        $data1 = $request->input('number2');
        $pdf = PDF::loadview('content.pdf',['data1'=>$data1], ['data' => $data]);
	    return $pdf->stream('laporan-p');
        
    }
}
