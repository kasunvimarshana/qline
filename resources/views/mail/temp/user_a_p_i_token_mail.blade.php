<!-- h1><b>Subject</b></h1 -->

@isset($user_a_p_i_token_object)

    @if ( ($user_a_p_i_token_object->user) )
        <p>Dear {{ $user_a_p_i_token_object->user->name_first }},</p>
    @endif

    <p><strong>New Token</strong></p>
    <!-- style="border: 1px solid black;" -->
    <table style="width: 100%;">
        @php
            $userObject = $user_a_p_i_token_object->user;
        @endphp
        @isset($userObject)
            <tr style="">
                <td style="width: 15%;text-align: right !important;"> Code : </td>
                <td style=""> {{ $userObject->code_active }} </td>
            </tr>
        @endisset
    </table>
@endisset

<p>****** System Genarated Message ******</p>