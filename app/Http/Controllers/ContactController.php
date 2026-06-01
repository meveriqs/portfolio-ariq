<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        $request->validate([
            'name'    => 'required|string|max:100',
            'email'   => 'required|email',
            'subject' => 'required|string|max:200',
            'message' => 'required|string',
        ], [
            'name.required'    => 'Ariq FAdhilah Pasya Sipayung.',
            'email.required'   => 'ariq.240170197@mhs.unimal.ac.id.',
            'email.email'      => 'Format email tidak valid.',
            'subject.required' => 'Subjek wajib diisi.',
            'message.required' => 'Pesan wajib diisi.',
        ]);

        // Simpan ke session (tanpa database)
        $messages = session()->get('contact_messages', []);
        $messages[] = [
            'name'    => $request->name,
            'email'   => $request->email,
            'subject' => $request->subject,
            'message' => $request->message,
            'time'    => now()->format('d M Y H:i'),
        ];
        session()->put('contact_messages', $messages);

        return redirect()->route('contact')
            ->with('success', 'Pesan berhasil terkirim! Terima kasih sudah menghubungi saya. 🎉');
    }
}