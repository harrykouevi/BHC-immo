<?php

namespace App\Services;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ReminderDetails
{
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
}

class NotificationService extends Mailable
{
    use Queueable, SerializesModels;
    // Define the ReminderDetails class inside the ReminderComponent


    // Method that accepts the ReminderDetails object
    public function sendScheduleConfimationMessage(string $mail, ReminderDetails $details)
    {
        $emailContent = "
            <h1>Programmation Visite</h1>
            <p>Bonjour  $details->name,</p>
            <p>Nous vous écrivons pour vous confirmer que votre visite est bien programmée sur la date du  $details->date à  $details->time .</p>
            ". ($details->message ? " <p>Détails supplémentaires :  $details->message </p>" : "") . "
            <p>Merci ! </p>
            <p>Cordialement,<br>L'équipe de Votre Entreprise</p>
            [Votre nom]
            [Votre position]
            [Nom de l'entreprise ou organisation]
            [Coordonnées]
        ";
        // email admin
        Mail::html($emailContent, function ($mail) use ($details) {
            $mail->from(config('mail.from.address'), config('mail.from.name'))
                 ->to('harry.kouevi@gmail.com')  // Envoi à l'administrateur
                 ->subject('Programmation Visite');
        });

    }

    public function sendRemindMessage(string $mail, ReminderDetails $details)
    {
        $emailContent = "
            <h1>Rappel de Visite</h1>
            <p>Bonjour  $details->name,</p>
            <p>Nous vous rappelons que votre visite est programmée le  $details->date à  $details->time .</p>
            ". ($details->message ? " <p>Détails supplémentaires :  $details->message </p>" : "") . "
            <p>Merci ! </p>
            <p>Cordialement,<br>L'équipe de Votre Entreprise</p>
            [Votre nom]
            [Votre position]
            [Nom de l'entreprise ou organisation]
            [Coordonnées]
        ";
        // email admin
        Mail::html($emailContent, function ($mail) use ($details) {
            $mail->from(config('mail.from.address'), config('mail.from.name'))
                 ->to('harry.kouevi@gmail.com')  // Envoi à l'administrateur
                 ->subject('Rappel de Visite');
        });

    }

    public function sendGreatMessage(string $mail, ReminderDetails $details)
    {
        $emailContent = "
            <h1>Confirmation de votre visite</h1>
            <p>Bonjour  $details->name,</p>
            <p>Nous vous remercions d'avoir pris le temps de visiter notre propriété. Nous sommes heureux de confirmer que votre visite a bien été effectuée le
            <strong>$details->date
            </strong> à <strong> $details->time </strong>.</p>

            <h2>Détails de la Visite :</h2>
            <ul>
                <li><strong>Propriété :</strong> [Nom ou Adresse de la Propriété]</li>
                <li><strong>Visiteur :</strong> $details->name </li>
                <li><strong>Hôte :</strong> [Nom de l'Hôte]</li>
                <li><strong>Date et Heure :</strong> $details->date $details->time </li>
            </ul>

            <p>Nous espérons que cette visite vous a permis d'apprécier pleinement la propriété et qu'elle a répondu à toutes vos attentes. Si vous avez des questions supplémentaires ou si vous souhaitez planifier une nouvelle visite, n'hésitez pas à nous contacter.</p>

             <p >Cordialement,<br>[Votre Nom]<br>[Votre Titre]<br>[Votre Société]</p>
        ";
        // email admin
        Mail::html($emailContent, function ($mail) use ($details) {
            $mail->from(config('mail.from.address'), config('mail.from.name'))
                 ->to('harry.kouevi@gmail.com')  // Envoi à l'administrateur
                 ->subject('Confirmation de Visite');
        });

    }

}
