<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\WelcomeMail;
use App\Mail\MyEmail;

use Illuminate\Support\Str;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{

    public function envio(Request $request){
        Mail::to('meuemail@email.com')->send(new WelcomeMail(
            $request->name,
            $request->numero,
            $request->email,
            $request->content,
        ));
        return redirect('/pergunte-aos-especialistas');
    }

    public function novidades(Request $request){
        Mail::to('meuemail@email.com')->send(new MyEmail(
            $request->email,
        ));
        return back();
    }

}
