<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contribution;
use App\User;
use DB;
use Carbon\Carbon;
use Session;
use Auth;
use RealRashid\SweetAlert\Facades\Alert;

class AdminCarierController extends Controller
{
    public function index()
    {
        $datas = Contribution::get();
    
        return view('admin.kontribusi.kontribusi', compact('datas'));
    }

    public function create()
    {
        
        return view('admin.kontribusi.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    
        Contribution::create([
            'pohon' => $request->input('pohon'),
            'kg' => $request->input('oksigen'),
            'kwh' => $request->input('energi'),
            'rumah' => $request->input('rumah'),
            'ltr' => $request->input('bbm'),
        ]);

        Session::flash('message', 'Berhasil ditambahkan!');
        Session::flash('message_type', 'success');
        return redirect()->route('adminCarier.index');

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

        $data = Contribution::findOrFail($id);

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

        $data = Contribution::findOrFail($id);

        return view('admin.kontribusi.edit', compact('data'));
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
        $user_data = Contribution::findOrFail($id);

        $user_data->pohon = $request->input('pohon');
        $user_data->kg = $request->input('oksigen');
        $user_data->kwh = $request->input('energi');
        $user_data->rumah = $request->input('rumah');
        $user_data->ltr = $request->input('bbm');

        $user_data->update();

        Session::flash('message', 'Berhasil diubah!');
        Session::flash('message_type', 'success');
        return redirect()->to('adminCarier');
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
            $user_data = Contribution::findOrFail($id);
            // $disposisi = Disposisi::findOrFail($id);
            $user_data->delete();
            // $disposisi->delete();
            Session::flash('message', 'Berhasil dihapus!');
            Session::flash('message_type', 'success');
        } else {
            Session::flash('message', 'Akun anda sendiri tidak bisa dihapus!');
            Session::flash('message_type', 'danger');
        }
        return redirect()->to('adminCarier');
    }
}
