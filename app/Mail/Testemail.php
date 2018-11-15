<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class Testemail extends Mailable
{
    use Queueable, SerializesModels;

    // use $name as public
    public $name;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($name)
    {
       $this->name = $name;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('dari@admin.com')
                    ->subject('Belajar SMTP Mailtrap - Laravel 5.7')
                    ->view('email.index');
    }
}
