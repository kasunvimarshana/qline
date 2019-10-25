<!-- h1><b>Subject</b></h1 -->

@isset($quality_record_input_scan_data_object)

    <p>Dear Team,</p>
    
    <p>This is to keep you notify that following goods are ready to AQL</p>

    <table style="width: 100%;">
        @php
            $qualityRecordInputScanDataObject = $quality_record_input_scan_data_object;
        @endphp
        @isset($qualityRecordInputScanDataObject)
            <tr style="">
                <td style="width: 15%;text-align: right !important;"> Date </td>
                <td style=""> {{ $time_create->format('Y-m-d') }} </td>
                <td style="width: 15%;text-align: right !important;"> Time Slot </td>
                <td style=""> {{ $time_create->format('H:i') }} </td>
                <td style="width: 15%;text-align: right !important;"> Size </td>
                <td style=""> {{ $qualityRecordInputScanDataObject->size_id }} </td>
                <td style="width: 15%;text-align: right !important;"> Quantity : </td>
                <td style=""> {{ $qualityRecordInputScanDataObject->count_data }} </td>
            </tr>
        @endisset
    </table>
@endisset

<p>***************** Please do not reply, System generated email *****************</p>