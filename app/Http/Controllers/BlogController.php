<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Blog;
use App\User;
use Carbon\Carbon;
use Session;
use Auth;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Redirect;


class BlogController extends Controller
{
    public function index()
    {
        $datas = DB::table('blog')->paginate(3);
        return view('blog.app', compact('datas'));
    }
    public function detail ($id){
        $data = Blog::findOrFail($id);

        return view('blog.show', compact('data'));
    }
}
