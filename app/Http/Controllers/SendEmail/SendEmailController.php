<?php

namespace App\Http\Controllers\SendEmail;

use App\Http\Controllers\Controller;
use App\Http\Requests\Email\MeilSendValidationRequest;
use App\Services\SendEmail\SendEmailServices;

class SendEmailController extends Controller
{

    public function index()
    {
        return view('SendEmail.index');
    }

    public function sendLetter(MeilSendValidationRequest $request)
    {
        $obj = new SendEmailServices();

        $title = $request->input('title');
        $info = $request->input('info');
        $obj->sendEmail($title, $info);
        return redirect('/sendmail');


    }
}
