<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Kontak extends Controller
{
    public function kirim()
    {
        $email = \Config\Services::email();

        $nama    = esc($this->request->getPost('name'));
        $from    = esc($this->request->getPost('email'));
        $subject = esc($this->request->getPost('subject'));
        $message = esc($this->request->getPost('message'));

        // Format isi email
        $pesan = "
        <h3>Pesan Baru dari Website ZonaJasa</h3>
        <p><b>Nama:</b> {$nama}</p>
        <p><b>Email:</b> {$from}</p>
        <p><b>Subjek:</b> {$subject}</p>
        <p><b>Pesan:</b><br>{$message}</p>
        ";

        $email->setTo('zonajasaplatform@gmail.com');
        $email->setFrom(env('email.fromEmail'), env('email.fromName'));
        $email->setReplyTo($from, $nama);

        $email->setSubject($subject);
        $email->setMessage($pesan);

        if ($email->send()) {
            return redirect()->back()->with('success', 'Pesan berhasil dikirim');
        } else {
            return redirect()->back()->with('error', 'Pesan gagal dikirim');
        }
    }
}