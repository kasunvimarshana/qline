<!-- h1><b>Subject</b></h1 -->

@isset($quality_record_input_scan_data_object)

    <p><strong>New Quantity</strong></p>
    <!-- style="border: 1px solid black;" -->
    <table style="width: 100%;">
        @php
            $qualityRecordInputScanDataObject = $quality_record_input_scan_data_object;
        @endphp
        @isset($qualityRecordInputScanDataObject)
            <tr style="">
                <td style="width: 15%;text-align: right !important;"> Quantity : </td>
                <td style=""> {{ $qualityRecordInputScanDataObject->count_data }} </td>
            </tr>
        @endisset
    </table>
@endisset

<p>***************** Please do not reply, System generated email *****************</p>