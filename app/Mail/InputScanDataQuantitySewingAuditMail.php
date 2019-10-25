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

class InputScanDataQuantitySewingAuditMail extends Mailable
{
    use Queueable, SerializesModels;

    protected $qualityRecordInputScanData;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($qualityRecordInputScanData)
    {
        //
        $this->qualityRecordInputScanData = $qualityRecordInputScanData;
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
        
        $qualityRecordInputScanData = $this->qualityRecordInputScanData;
        $message = $this;
            
        $time_create = $carbonObject->createFromFormat("Y-m-d H:i:s", $qualityRecordInputScanData->time_create);
        
        $messageSubject = "Pending Sewing AQL | QTY – {$qualityRecordInputScanData->count_data} | Date – {$time_create->format('Y-m-d')} | Time - {$time_create->format('H:i')}";
        
        $message = $message->subject( $messageSubject );
        $message = $message->view('mail.input_scan_data_quantity_sewing_audit_mail')->with([
            'quality_record_input_scan_data_object' => $qualityRecordInputScanData,
            'time_create' => $time_create
        ]);
        
        return $message;
    }
}
