<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

use Illuminate\Support\Facades\Hash;
use DB;
use Illuminate\Support\Str;
use \StdClass;
use \Exception;
use Carbon\Carbon;

class userAPITokenMail extends Mailable
{
    use Queueable, SerializesModels;

    protected $userAPIToken;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($userAPIToken)
    {
        //
        $this->userAPIToken = $userAPIToken;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        //return $this->view('view.name');
        $carbonObject = new Carbon();
        $date_today = Carbon::now();//->format('Y-m-d');
        
        $userAPIToken = $this->userAPIToken;
        $message = $this;
        $messageSubject = "New Token";
        
        $message = $message->subject( $messageSubject );
        $message = $message->view('mail.user_a_p_i_token_mail')->with([
            'user_a_p_i_token_object' => $userAPIToken
        ]);
        
        return $message;
    }
}
