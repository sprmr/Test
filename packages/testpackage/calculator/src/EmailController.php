<?php

namespace Testpackage\Calculator;

use Mail;
use Testpackage\Calculator\SendMailable;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EmailController extends Controller
{
    //
     public function sendMail($email,$sub,$msg){

     
     //    $test= Mail::to('91monasurandra@gmail.com')->send(new SendMailable($sub,$msg));
    	
        $header='From: test@netgensolutions.com';
    	$send=mail($email,$sub,$msg,$header);
    	if($send)
		{
		    echo "mail send.";
		}
		else{
			 echo "Failed to send";
		}
        die;

       // $this->sendMaildata('91monasurandra@gmail.com',$sub,$msg);
    	
    }

     public function sendMaildata($email,$subject,$msg) {
        if($email) {
            if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
                try {
                    Mail::to($email)->send(new SendMailable($subject,$msg));     
                } catch(Exception $e) {
                    return $e;die;
                }
            }
        }
    }
}


 
   