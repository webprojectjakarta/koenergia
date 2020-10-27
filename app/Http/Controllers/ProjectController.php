<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Project;
use App\User;
use Carbon\Carbon;
use Session;
use Auth;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Redirect;

class ProjectController extends Controller
{
    public function index()
    {
        $datas = DB::table('project')->paginate(3);
        return view('project.app', compact('datas'));
    }
    public function detail ($id){
        $data = Project::findOrFail($id);

        return view('project.show', compact('data'));
    }
}
