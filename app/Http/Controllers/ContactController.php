<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function sendEmail(Request $request)
    {
        // Validasi input
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);

        // Data yang akan dikirimkan ke email
        $data = [
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'message' => $request->input('message')
        ];

        // Kirim email
        Mail::send('emails.contact', ['data' => $data], function ($message) use ($data) {
            $message->to('fadhilanugrah864@example.com') // Ganti dengan email tujuan
                    ->subject('Pesan dari ' . $data['name']); // Gunakan nama dari data
        });

        // Redirect setelah email terkirim
        return back()->with('success', 'Pesan berhasil dikirim!');
    }
}
