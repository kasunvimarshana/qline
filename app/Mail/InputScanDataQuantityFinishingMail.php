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

class InputScanDataQuantityFinishingMail extends Mailable
{
    use Queueable, SerializesModels;

    protected $qualityRecordInputScanDataArray;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($qualityRecordInputScanDataArray)
    {
        //
        $this->qualityRecordInputScanDataArray = $qualityRecordInputScanDataArray;
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
        
        $qualityRecordInputScanDataArray = $this->qualityRecordInputScanDataArray;
        $message = $this;
        
        $messageSubject = "Pending Booking to Finishing | Date – {$date_today->format('Y-m-d')} | Time - {$date_today->format('H:i')}";
        
        $message = $message->subject( $messageSubject );
        $message = $message->view('mail.input_scan_data_quantity_finishing_mail')->with([
            'quality_record_input_scan_data_array' => $qualityRecordInputScanDataArray
        ]);
        
        return $message;
    }
}
