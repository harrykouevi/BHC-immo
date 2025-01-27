<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class VisitReminderMail extends Mailable
{
    use Queueable, SerializesModels;


    public string $name;
    public string $date;
    public ?string $time;
    public ?string $message;

    public function __construct(string $name ,string $date ,string $time = Null , string $message = Null)
    {
        $this->name = $name;
        $this->message = $message;
        $this->date = $date;
        $this->time = $time;
    }

    public function build()
    {
        $subject = 'Rappel de visite';

        // Create the HTML content for the email
        $htmlContent = '
        <!DOCTYPE html>
        <html lang="fr">
        <head>
            <meta charset="UTF-8">
            <title>Confirmation de Visite</title>
        </head>
        <body>
            <h1>Rappel de visite</h1>
            <p>Bonjour  ' . $this->name. ',</p>
            <p>Nous vous rappelons que votre visite est programmée le' . $this->date . ' à  ' .$this->time . ' .</p>
             '. ($this->message ? " <p>Détails supplémentaires :  $this->message </p>" : "") . '
            <p>Merci ! </p>
            <p>Cordialement,<br>L\'équipe de Votre Entreprise</p>
        </body>
        </html>';

        return $this->subject($subject)
                    ->html($htmlContent);
    }


    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
