<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Partner;
use App\User;
use Carbon\Carbon;
use Session;
use Auth;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Redirect;

class PartnerShipController extends Controller
{
    public function index()
    {
        $datas = Partner::get();
        return view('partner.app', compact('datas'));
    }
}
