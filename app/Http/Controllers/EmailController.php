<?php

namespace App\Http\Controllers;

use App\Jobs\ProcessNews;
use App\Mail\ContactFormMail;
use App\Mail\SendEmail;
use App\Models\Email;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    public function contact(Request $request){
        $rules = [
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'email' => 'required|email',
            'subject' => 'required|string',
            'mail' => 'required|string',
        ];

        $messages = [
            'first_name.required' => 'Nama depan harus diisi',
            'last_name.required' => 'Nama belakang harus diisi',
            'email.required' => 'Alamat email harus diisi',
            'email.email' => 'Alamat email harus valid',
            'subject.required' => 'Subjek harus diisi',
            'mail.required' => 'Pesan harus diisi',
        ];

        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'errors' => $validator->errors(),
            ], 422);
        }

        $first_name = $request->input('first_name');
        $last_name = $request->input('last_name');
        $email = $request->input('email');
        $subject = $request->input('subject');
        $mail = $request->input('mail');

        Mail::to('fotobos81@gmail.com')->send(new ContactFormMail($first_name, $last_name, $email, $subject, $mail));

        return response()->json([
            'success' => true,
            'message' => 'Pesan anda telah terkirimkan. Terima kasih!',
        ]);
    }


    public function storeEmail(Request $request){

        $rules = [
            'email' => 'required|email|unique:emails,email,except,id',
        ];

        $messages = [
            'email.required' => 'Email harus diisi.',
            'email.email' => 'Format email tidak valid.',
            'email.unique' => 'Alamat email tersebut sudah digunakan.',
        ];

        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $email = $request->input('email');

        Mail::to($email)->send(new SendEmail());

        Email::create([
            'email' => $request->email
        ]);

        return redirect(route('beranda'))->with('success', 'Terimakasih sudah berlangganan.');
    }


    // public function sendEmail(Request $request)
    // {
    //     if ($request->password != "ayam") {
    //         return response()->json(400);
    //     }

    //     $emails = Email::pluck('email');

    //     foreach ($emails as $email) {
    //         ProcessNews::dispatch($email);
    //     }

    //     Artisan::call('queue:work');

    //     return response()->json(200);
    // }
}
