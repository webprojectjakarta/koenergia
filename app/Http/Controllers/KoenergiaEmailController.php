<?php

namespace App\Http\Controllers;
use Mail;
use App\Mail\KoenergiaEmail;
use Illuminate\Http\Request;

class KoenergiaEmailController extends Controller
{
    public function send(Request $request)
    {
        $datas = $request;
        $email = $request->penerima;
        $pesan = $request->pesan;
        $data = array(
                'name' => $request->nama,
                'pesan' => $pesan,
                'email' => $request->penerima
            );


        // Kirim Email
        Mail::send('content.email', $data, function($mail) use($email) {

            $mail->to("info@koenergia.com", 'no-reply')
                    ->subject("Koenergia");
            $mail->from("kolegaenergiabadi@gmail.com", 'Koenergia');
            $mail->setContentType('text/plain');
        });

        // Cek kegagalan
        if (Mail::failures()) {
            return new Error(Mail::failures()); 
        }else{
            return redirect()->back();
        }

    }
}
