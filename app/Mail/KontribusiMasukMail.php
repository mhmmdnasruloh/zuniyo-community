<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class KontribusiMasukMail extends Mailable
{
    use Queueable, SerializesModels;

    public $kontribusi;

    public function __construct($kontribusi)
    {
        $this->kontribusi = $kontribusi;
    }

    public function build()
    {
        return $this->subject('Kontribusi Kamu Telah Diterima')
                    ->view('emails.kontribusi_masuk');
    }
}
