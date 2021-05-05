<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactEmailTemplate extends Mailable
{
    use Queueable, SerializesModels;

    private $form;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($form)
    {
        $this->form = $form;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.contact', [
            'shopName' => $this->form["shop_name"],
            'url' => $this->form["URL"],
            'area' => $this->form["地方"],
            'prefecture' => $this->form["地域"],
            'name' => $this->form["ご担当者様"],
            'keywords' => $this->form["keywords"],
            'email' => $this->form["email"],
            'inquiry' => $this->form["問合せ内容(必須)"],
            'otherQuestions' => $this->form["その他ご質問"],
        ]);
    }
}
