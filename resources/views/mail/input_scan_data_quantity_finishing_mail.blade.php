<!-- h1><b>Subject</b></h1 -->

@isset($quality_record_input_scan_data_array)

    <p>Dear Team,</p>

    <p>This is to keep you notify that following goods are ready to collect for finishing</p>

    <table style="width: 100%;">
        @php
            $qualityRecordInputScanDataArray = $quality_record_input_scan_data_array;
        @endphp
        @isset($qualityRecordInputScanDataArray)
            @foreach( $qualityRecordInputScanDataArray as $key => $value )
            <tr style="">
                <td style="width: 15%;text-align: right !important;"> Size </td>
                <td style=""> {{ $value->size_id }} </td>
                <td style="width: 15%;text-align: right !important;"> Quantity : </td>
                <td style=""> {{ $value->count_data }} </td>
            </tr>
            @endforeach
        @endisset
    </table>
@endisset

<p>***************** Please do not reply, System generated email *****************</p>

 
