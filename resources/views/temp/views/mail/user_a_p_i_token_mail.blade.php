<!-- h1><b>Subject</b></h1 -->

@isset($user_a_p_i_token_object)

    <p>Dear User,</p>

    <p>Please use following token for Account Validation </p>
    @php
        $userObject = $user_a_p_i_token_object->user;
    @endphp
    @isset($userObject)
        <p><strong>{{ $userObject->code_active }}</strong></p>
    @endisset
@endisset

<p>Restricted user account, Please don’t share your user account with any other person</p> 

<p>***************** Please do not reply, System generated email *****************</p>