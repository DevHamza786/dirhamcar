<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class CustomerEmail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    protected $data2;
    public function __construct($data2)
    {
        $this->data2 = $data2;


    }
    public function build()
    {
        return $this->subject('Mail from dirhamcars.com')
                    ->view('frontend.customer_email')
                    ->with('data2', $this->data2);

    }
}
