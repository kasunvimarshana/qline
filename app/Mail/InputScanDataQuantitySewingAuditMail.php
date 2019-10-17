<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

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
        $qualityRecordInputScanData = $this->qualityRecordInputScanData;
        $message = $this;
        $messageSubject = "New Quantity";
        
        $message = $message->subject( $messageSubject );
        $message = $message->view('mail.input_scan_data_quantity_sewing_audit_mail')->with([
            'quality_record_input_scan_data_object' => $qualityRecordInputScanData
        ]);
        
        return $message;
    }
}
