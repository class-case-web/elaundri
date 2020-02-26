<?php namespace App\Http\Controllers;


//library buat mengirim email
use Illuminate\Support\Facades\Mail;

class SampleEmailController extends Controller
{
	
	public function testSendEmail()
	{
		$to = 'niwang@crocodic.com'; //email tujuan
		$subject = 'Testing SMTP Google Email'; //subject email
		$from_email = 'arif.niwank1@gmail.com'; //email pengirim, bisa di custom tapi kemungkinan masuk spam
		$from_name = 'Email Tester'; //nama dari akun email, bisa di custom tapi kemungkinan masuk spam
		$cc_email = ['arif.niwank2@gmail.com','malfiandzikri@gmail.com']; //untuk cc, bisa dibikin array kosong

		$data['nama'] = 'Arif Niwang Djati';
		// return view('email.test',$data); //for debuging

		//urutan parameter
		// 1. view template
		// 2. data yang mau dikirim ke view
		// 3. object punyanya library => variable defaultku "$message"
		// 4. parameter tambahan buat dipake didalem method pengiriman (kayak subject, cc , dll)
        Mail::send("email.test", $data, function ($message) use ($to,$subject,$from_email,$from_name,$cc_email) {
        	//detalnya di dalem method ini ada di https://laravel.com/docs/5.2/mail
            $message->priority(1);
            $message->to($to);
            $message->from($from_email, $from_name);
            $message->cc($cc_email);
            $message->subject($subject);
        });
	}
}