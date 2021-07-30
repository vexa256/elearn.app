<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class WelcomeMail extends Mailable
{
    use Queueable, SerializesModels;


    public $user;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($user)
    {
         $this->user = $user;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {

        return $this->view('mail.register')
        ->from('eaphlnelearning@gmail.com')
         ->subject( 'EAPHLN E-learning Account Creation, The EAPHLN e-learning system is intended to be utilized as a training tool to build the capacity of the laboratories professionals within the region|The EAPHLNP is a World Bank-funded project that is being implemented by the East African Community (EAC) Partner States namely; Burundi Kenya, Rwanda, Tanzania and Uganda in collaboration with the East African Community Secretariat and the East Central and Southern African Health Community (ECSA-HC)' )
         ->bcc('eaphlnelearning@gmail.com');

     
    }
}
