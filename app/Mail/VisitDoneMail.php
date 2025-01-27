<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class VisitDoneMail extends Mailable
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
        $subject = 'Confirmation de votre visite';

        // Create the HTML content for the email
        $htmlContent = '
        <!DOCTYPE html>
        <html lang="fr">
        <head>
            <meta charset="UTF-8">
            <title>Confirmation de Visite</title>
        </head>
        <body>
            <h1>Confirmation de votre visite</h1>
            <p>Bonjour  ' . $this->name. ',</p>
            <p>Nous vous remercions d\'avoir pris le temps de visiter notre propriété. Nous sommes heureux de confirmer que votre visite a bien été effectuée le
            <strong>' . $this->date. '
            </strong> à <strong> ' . $this->time. ' </strong>.</p>

            <h2>Détails de la Visite :</h2>
            <ul>
                <li><strong>Propriété :</strong> [Nom ou Adresse de la Propriété]</li>
                <li><strong>Visiteur :</strong> ' . $this->name. ' </li>
                <li><strong>Hôte :</strong> [Nom de l\'Hôte]</li>
                <li><strong>Date et Heure :</strong> ' . $this->date . ' ' . $this->time. ' </li>
            </ul>

            <p>Nous espérons que cette visite vous a permis d\'apprécier pleinement la propriété et qu\'elle a répondu à toutes vos attentes. Si vous avez des questions supplémentaires ou si vous souhaitez planifier une nouvelle visite, n\'hésitez pas à nous contacter.</p>

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
