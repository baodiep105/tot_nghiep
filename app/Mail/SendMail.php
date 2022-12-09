<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendMail extends Mailable
{
    use Queueable, SerializesModels;
    public $username;
    public $hash;
    public $tieu_de;

    public function __construct($username, $hash, $tieu_de)
    {
        $this->username     = $username;
        $this->hash         = $hash;
        $this->tieu_de      = $tieu_de;
    }


    public function build()
    {
        return $this->subject($this->tieu_de)->view('mail.sendMail', [
            'username' => $this->username,
            'hash'   => $this->hash,
        ]);
    }
}
