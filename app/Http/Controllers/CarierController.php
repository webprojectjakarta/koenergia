<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Careers;
use Carbon\Carbon;
use Session;
use Auth;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Redirect;

class CarierController extends Controller
{
    public function index()
    {
        $datas = Careers::get();
        return view('carier.app', compact('datas'));
    }
}
