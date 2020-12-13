<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $id = $request->header('User-Agent');
        return view('layouts.app');
        
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
