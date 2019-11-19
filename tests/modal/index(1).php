<!-- ----------------------------------------------------------------------------------------------------- -->
<?php

$('#myModal').on('shown.bs.modal', function () {
    $('#myInput').trigger('focus')
});

?>
<!-- ----------------------------------------------------------------------------------------------------- -->

<!-- ----------------------------------------------------------------------------------------------------- -->
<?php

$('#exampleModal').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget) // Button that triggered the modal
    var recipient = button.data('whatever') // Extract info from data-* attributes
    // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
    // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
    var modal = $(this)
    modal.find('.modal-title').text('New message to ' + recipient)
    modal.find('.modal-body input').val(recipient)
});

?>
<!-- ----------------------------------------------------------------------------------------------------- -->

<!-- ----------------------------------------------------------------------------------------------------- -->
<?php

$('#myModal').modal('handleUpdate');

?>
<!-- ----------------------------------------------------------------------------------------------------- -->

<!-- ----------------------------------------------------------------------------------------------------- -->
<?php

$('#myModal').modal(options);

$('#myModal').modal({
    'backdrop': true,
    'keyboard': true,
    'focus': true,
    'show': true
});

?>
<!-- ----------------------------------------------------------------------------------------------------- -->

<!-- ----------------------------------------------------------------------------------------------------- -->
<?php

$('#myModal').modal('toggle');
$('#myModal').modal('show');
$('#myModal').modal('hide');
$('#myModal').modal('handleUpdate');
$('#myModal').modal('dispose');

?>
<!-- ----------------------------------------------------------------------------------------------------- -->