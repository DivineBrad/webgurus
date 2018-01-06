<?php

namespace App\Mail;
use Illuminate\Http\Request;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ContactUserInfo extends Mailable
{
    use Queueable, SerializesModels;


    protected $request;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.contactInfo')
                    ->with([
                        'firstname' => $this->request->input('firstname'),
                        'lastname' => $this->request->input('lastname'),
                        'email' => $this->request->input('email'),
                        'subject' => $this->request->input('subject'),
                        'message' => $this->request->input('message'),
                    ]);
    }
}
