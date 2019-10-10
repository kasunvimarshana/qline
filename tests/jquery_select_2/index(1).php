<!-- --------------------------------------------------------------------------------------------------------------- -->
http://qaru.site/questions/59219/how-to-set-selected-value-of-jquery-select2
https://code-examples.net/en/q/153add9
https://paulund.co.uk/add-and-remove-options-in-select-using-jquery
<!-- --------------------------------------------------------------------------------------------------------------- -->
<!-- --------------------------------------------------------------------------------------------------------------- -->
<select id="selectBox" name="selectBox">
    <option value="option1"> option1 </option>
    <option value="option2"> option2 </option>
    <option value="option3"> option3 </option>
    <option value="option4"> option4 </option>
</select>

<script>
    $("#selectBox option[value='option1']").remove();
    $("#selectBox").append('<option value="option6">option6</option>');
    $('select').children('option:not(:first)').remove();
    
    
    $.each(selectValues, function(key, value) {
     $('#mySelect')
         .append($("<option></option>")
         .attr("value",key)
         .text(value));
    });
</script>
<!-- --------------------------------------------------------------------------------------------------------------- -->
<!-- --------------------------------------------------------------------------------------------------------------- -->
<script>
    $('#example option:selected').attr('data-id');
    $(this).find(":selected").data("id")
</script>
<!-- --------------------------------------------------------------------------------------------------------------- -->
<!-- --------------------------------------------------------------------------------------------------------------- -->
<script>
    $('#all_contacts').select2('data', {id: '123', text: 'res_data.primary_email'});
    $('[name=mySelect2]').val("0");
    $('#inputID').select2('data', {id: 100, a_key: 'Lorem Ipsum'}).change();
</script>
<!-- --------------------------------------------------------------------------------------------------------------- -->