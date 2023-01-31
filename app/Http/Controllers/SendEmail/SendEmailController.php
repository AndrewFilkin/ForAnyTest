<?php

namespace App\Http\Controllers\SendEmail;

use App\Http\Controllers\Controller;
use App\Http\Requests\Email\MeilSendValidationRequest;
use App\Jobs\SendEmailJob;
use App\Services\SendEmail\SendEmailServices;
use Illuminate\Support\Facades\Mail;

class SendEmailController extends Controller
{

    public function index()
    {
        return view('SendEmail.index');
    }

    public function sendLetter(MeilSendValidationRequest $request)
    {

        $title = $request->input('title');
        $info = $request->input('info');
        $this->dispatch(new SendEmailJob($title, $info));
        return redirect('/sendmail')->with('success', 'Email send success');;






    }
}
