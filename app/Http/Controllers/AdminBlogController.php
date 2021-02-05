<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;
use App\User;
use DB;
use Carbon\Carbon;
use Session;
use Auth;
use RealRashid\SweetAlert\Facades\Alert;

class AdminBlogController extends Controller
{
    public function index()
    {
        $datas = Blog::get();
    
        return view('admin.blog.blog', compact('datas'));
    }

    public function create()
    {
        
        return view('admin.blog.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|string|max:255',
            'content' => 'required|string',
        ]);
        if($request->file('image') == '') {
            $image = NULL;
        } else {
            $file = $request->file('image');
            $dt = Carbon::now();
            $acak  = $file->getClientOriginalExtension();
            $fileName = rand(11111,99999).'-'.$dt->format('Y-m-d-H-i-s').'.'.$acak; 
            $request->file('image')->move("images/user", $fileName);
            $image = $fileName;
        }

        $datas = strip_tags($request->input('content'));
        $result = trim(preg_replace("'\n\r'","", $datas));

        

        Blog::create([
            'title' => $request->input('title'),
            'content' => strip_tags($request->input('content')),
            'image' => $image,
        ]);

        Session::flash('message', 'Berhasil ditambahkan!');
        Session::flash('message_type', 'success');
        return redirect()->route('adminBlog.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if((Auth::user()->level == 'user') && (Auth::user()->id != $id)) {
                Alert::info('Oopss..', 'Anda dilarang masuk ke area ini.');
                return redirect()->to('/');
        }

        $data = Blog::findOrFail($id);

        return view('auth.show', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {   
        if((Auth::user()->level == 'user') && (Auth::user()->id != $id)) {
                Alert::info('Oopss..', 'Anda dilarang masuk ke area ini.');
                return redirect()->to('/');
        }

        $data = Blog::findOrFail($id);

        return view('admin.blog.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user_data = Blog::findOrFail($id);

        if($request->file('image')) 
        {
            $file = $request->file('image');
            $dt = Carbon::now();
            $acak  = $file->getClientOriginalExtension();
            $fileName = rand(11111,99999).'-'.$dt->format('Y-m-d-H-i-s').'.'.$acak; 
            $request->file('image')->move("images/user", $fileName);
            $user_data->image = $fileName;
        }

        $user_data->title = $request->input('title');
        $user_data->content = strip_tags($request->input('content'));

        $user_data->update();

        Session::flash('message', 'Berhasil diubah!');
        Session::flash('message_type', 'success');
        return redirect()->to('adminBlog');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if(Auth::user()->id != $id) {
            $user_data = Blog::findOrFail($id);
            // $disposisi = Disposisi::findOrFail($id);
            $user_data->delete();
            // $disposisi->delete();
            Session::flash('message', 'Berhasil dihapus!');
            Session::flash('message_type', 'success');
        } else {
            Session::flash('message', 'Akun anda sendiri tidak bisa dihapus!');
            Session::flash('message_type', 'danger');
        }
        return redirect()->to('adminBlog');
    }
}