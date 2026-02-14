<?php

// app/Mail/FormSubmissionMail.php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

//class FormSubmissionMail extends Mailable implements ShouldQueue
class FormSubmissionMail extends Mailable
{
    //use Queueable, SerializesModels;
    use SerializesModels;

    public $formName;
    public $data;

    public function __construct($formName, $data)
    {
        $this->formName = $formName;
        $this->data = $data;
        logger('FormSubmissionMail constructor called with data: ' . json_encode($data));
    }

    public function build()
    {
        logger('FormSubmissionMail build method data: ' . json_encode($this->data));
        
        $fromEmail = config('mail.from.address');
        $fromName = config('mail.from.name');
        
        if (isset($this->data['email'])) {
            $fromEmail = $this->data['email'];
        }
        
        if (isset($this->data['name'])) {
            $fromName = $this->data['name'];
        }
        
        logger('Using from email: ' . $fromEmail . ', from name: ' . $fromName);
        
        return $this->from($fromEmail, $fromName)
               ->subject(config('custom.app_name'))
               ->markdown('emails.form_submission');        
    }
}