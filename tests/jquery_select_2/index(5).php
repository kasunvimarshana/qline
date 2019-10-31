<!-- ---------------------------------------------------------------------------------- -->
<script>
// Set up the Select2 control
$('#mySelect2').select2({
    ajax: {
        url: '/api/students'
    }
});

// Fetch the preselected item, and add to the control
var studentSelect = $('#mySelect2');
$.ajax({
    type: 'GET',
    url: '/api/students/s/' + studentId
}).then(function (data) {
    // create the option and append to Select2
    var option = new Option(data.full_name, data.id, true, true);
    studentSelect.append(option).trigger('change');

    // manually trigger the `select2:select` event
    studentSelect.trigger({
        type: 'select2:select',
        params: {
            data: data
        }
    });
});
</script>
<!-- ---------------------------------------------------------------------------------- -->