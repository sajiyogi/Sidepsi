<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class NewUserNotification extends Mailable
{
    use Queueable, SerializesModels;
    private $konsultasi;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($konsultasi)
    {
        //
        $this->konsultasi = $konsultasi;
    }
    public function via($notifiable)

    {

        return ['mail','database'];

    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('sajiyogiepermana@gmail.com.com')
                   ->view('admin.userspakar.index')
                   ->with(
                    [
                        'nama' => 'Diki Alfarabi Hadi',
                        'website' => 'www.malasngoding.com',
                    ]);
        
    }
}
