<!-- ------------------------------------------------------------------------------------------------------------------ -->
<script>
$('#mySelect2').select2({
    dropdownParent: $('#myModal')
});
</script>
<!-- ------------------------------------------------------------------------------------------------------------------ -->
<!-- ------------------------------------------------------------------------------------------------------------------ -->
<script>
$('body').on('shown.bs.modal', '.modal', function() {
  $(this).find('select').each(function() {
    var dropdownParent = $(document.body);
    if ($(this).parents('.modal.in:first').length !== 0)
      dropdownParent = $(this).parents('.modal.in:first');
    $(this).select2({
      dropdownParent: dropdownParent
      // ...
    });
  });
});
</script>
<!-- ------------------------------------------------------------------------------------------------------------------ -->
<!-- ------------------------------------------------------------------------------------------------------------------ -->
<script>
$('#js-example-basic-hide-search-multi').select2();

$('#js-example-basic-hide-search-multi').on('select2:opening select2:closing', function( event ) {
    var $searchfield = $(this).parent().find('.select2-search__field');
    $searchfield.prop('disabled', true);
});
</script>
<!-- ------------------------------------------------------------------------------------------------------------------ -->