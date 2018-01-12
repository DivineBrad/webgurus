<?php

namespace App\Mail;
use Illuminate\Http\Request;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ShareInsights extends Mailable
{
    use Queueable, SerializesModels;

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
        return $this->from($this->request->input('sender'))
        ->markdown('emails.shareinsights')
        ->with([
            'name' => $this->request->input('name'),
             'sender' => $this->request->input('sender'),
             'recipients' => $this->request->input('recipients'),
             'results' => json_decode($this->request->input('results_items'))
        ]);
    }
}
