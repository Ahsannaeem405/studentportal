<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Session;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class contact_mail extends Mailable
{
    use Queueable, SerializesModels;
    public $details;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($details)
    {
        $this->details = $details;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
       $get = Session::get('subject');

       return $this->from('azeemhanif327@gmail.com')->subject(  $get)->view('contact_email');

        // return $this->subject($get)
        // ->view('emails.sendmail');

    }
}
