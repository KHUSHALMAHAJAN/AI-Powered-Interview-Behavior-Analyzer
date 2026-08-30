<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class OtpMail extends Mailable
{
    use Queueable, SerializesModels;

    public string $userName;
    public string $otp;
    public string $purpose;

    public function __construct(
        string $userName,
        string $otp,
        string $purpose
    ) {
        $this->userName = $userName;
        $this->otp = $otp;
        $this->purpose = $purpose;
    }

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: $this->purpose === 'signup'
                ? 'Verify Your AI Interview Analyzer Account'
                : 'Your AI Interview Analyzer Login OTP',
        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'emails.otp',
        );
    }

    public function attachments(): array
    {
        return [];
    }
}
