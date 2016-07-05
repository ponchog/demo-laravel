<?php

namespace App\Http\Controllers;

use Log;
use Mail;
use Illuminate\Support\Facades\Input;
use App\Http\Controllers\Controller;


class EmailController extends Controller
{    
    public function sendContactEmail()
    {        
        try {
            $name = Input::get('name');
            $email = Input::get('email');
            $subject = Input::get('subject');
            $body = Input::get('message');            

            $emailTo = 'contact@arteinternationalus.com';
            // $emailCC = array('alfonso.garcia@arteinternationalus.com',
            //                     'ponchog@gmail.com');

            $emailCC = array('alfonso.garcia@arteinternationalus.com',
                                'ponchog@gmail.com',
                                'ernesto.ibanez@arteinternationalus.com',
                                'rebeca.trujillo@arteinternationalus.com',
                                'laura.flores@arteinternationalus.com');


            $data = array('name' => $name, 'email' => $email, 'body' => $body);

            $sent = Mail::send('emails.contact-email', $data, function ($message) use($email, $emailTo, $emailCC, $subject){
                $message->from($email, 'Arte International');
                $message->to($emailTo)
                        ->cc($emailCC);
                $message->subject($subject);                    

            });

            if ($sent){
                $emailResult = array ('sent'=>'yes');
            } else{
                $emailResult = array ('sent'=>'no');
            }

            return  json_encode($emailResult);

            
        } catch (Exception $e) {
            Log::info($e->getMessage());
            $emailResult = array ('sent'=>'no');
            
            return json_decode($emailResult);
            
        }
        
    }
}