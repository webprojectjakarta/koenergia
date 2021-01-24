<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Careers;
use App\User;
use DB;
use Carbon\Carbon;
use Session;
use Auth;
use RealRashid\SweetAlert\Facades\Alert;

class AdminContribusiController extends Controller
{
    public function index()
    {
        $datas = Careers::get();
    
        return view('admin.careers.careers', compact('datas'));
    }

    public function create()
    {
        
        return view('admin.careers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Careers::create([
            'title' => $request->input('title'),
            'requirement1' => $request->input('requirtment1'),
            'requirement2' => $request->input('requirtment2'),
            'requirement3' => $request->input('requirtment3'),
            'requirement4' => $request->input('requirtment4'),
            'requirement5' => $request->input('requirtment5'),
            'requirement6' => $request->input('requirtment6'),
            'requirement7' => $request->input('requirtment7'),
            'requirement8' => $request->input('requirtment8'),
            'requirement9' => $request->input('requirtment9'),
            'requirement10' => $request->input('requirtment10'),
        ]);

        Session::flash('message', 'Berhasil ditambahkan!');
        Session::flash('message_type', 'success');
        return redirect()->route('adminContribusi.index');

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

        $data = Careers::findOrFail($id);

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

        $data = Careers::findOrFail($id);

        return view('admin.careers.edit', compact('data'));
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
        $user_data = Careers::findOrFail($id);

        $user_data->title = $request->input('title');
        $user_data->requirement1 = $request->input('requirement1');
        $user_data->requirement2 = $request->input('requirement2');
        $user_data->requirement3 = $request->input('requirement3');
        $user_data->requirement4 = $request->input('requirement4');
        $user_data->requirement5 = $request->input('requirement5');
        $user_data->requirement6 = $request->input('requirement6');
        $user_data->requirement7 = $request->input('requirement7');
        $user_data->requirement8 = $request->input('requirement8');
        $user_data->requirement9 = $request->input('requirement9');
        $user_data->requirement10 = $request->input('requirement10');
        $user_data->update();

        Session::flash('message', 'Berhasil diubah!');
        Session::flash('message_type', 'success');
        return redirect()->to('adminContribusi');
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
            $user_data = Careers::findOrFail($id);
            // $disposisi = Disposisi::findOrFail($id);
            $user_data->delete();
            // $disposisi->delete();
            Session::flash('message', 'Berhasil dihapus!');
            Session::flash('message_type', 'success');
        } else {
            Session::flash('message', 'Akun anda sendiri tidak bisa dihapus!');
            Session::flash('message_type', 'danger');
        }
        return redirect()->to('adminContribusi');
    }
}
