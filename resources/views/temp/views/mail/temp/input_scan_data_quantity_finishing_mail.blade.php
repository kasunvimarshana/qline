<!-- h1><b>Subject</b></h1 -->

@isset($quality_record_input_scan_data_array)

    <p><strong>New Quantity</strong></p>
    <!-- style="border: 1px solid black;" -->
    <table style="width: 100%;">
        @php
            $qualityRecordInputScanDataArray = $quality_record_input_scan_data_array;
        @endphp
        @isset($qualityRecordInputScanDataArray)
            @foreach( $qualityRecordInputScanDataArray as $key => $value )
            <tr style="">
                <td style="width: 15%;text-align: right !important;"> Quantity : </td>
                <td style=""> {{ $value->count_data }} </td>
            </tr>
            @endforeach
        @endisset
    </table>
@endisset

<p>****** System Genarated Message ******</p>