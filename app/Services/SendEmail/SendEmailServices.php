<?php
namespace App\Services\SendEmail;

use Mail;
use App\Mail\SendEmaiForTest;


class SendEmailServices
{
 public function sendEmail($title, $info)
 {
     $messageData = [
         'title' => $title,
         'info' => $info,
     ];

     try {
         Mail::to('andrejfilkinq@gmail.com')->send(new SendEmaiForTest($messageData));
         return redirect('/sendmail')->with('success', 'Email send success');
     } catch (Exception $e) {
         return redirect('/sendmail');
     }
 }

}
