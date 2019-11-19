<!-- ------------------------------------------------------------------------ -->
<?php

$("#source").appendTo("#destination");
$("#source").prependTo("#destination");
jQuery("#NodesToMove").detach().appendTo('#DestinationContainerNode');
jQuery("#NodesToMove").appendTo('#DestinationContainerNode');
jQuery("#source").detach().appendTo('#destination');

?>
<!-- ------------------------------------------------------------------------ -->

<!-- ------------------------------------------------------------------------ -->
<?php

<script>
$( "p" ).click(function() {
  $( this ).toggleClass( "off" );
});
var p;
$( "button" ).click(function() {
  if ( p ) {
    p.appendTo( "body" );
    p = null;
  } else {
    p = $( "p" ).detach();
  }
});
</script>

?>
<!-- ------------------------------------------------------------------------ -->

<!-- ------------------------------------------------------------------------ -->
<?php

$('.blog-listing .post-item .post-author').each(function() {
    $(this).parent().prepend($(this));
});

?>
<!-- ------------------------------------------------------------------------ -->

<!-- ------------------------------------------------------------------------ -->
<?php

$('.blog-listing .post-item .post-author').each(function() {
	$(this).parent().parent().prepend($(this));
});

?>
<!-- ------------------------------------------------------------------------ -->

<!-- ------------------------------------------------------------------------ -->
<?php

$('.blog-listing .post-item .post-author').each(function() {
	$(this).parent().parent().find('h4').before($(this));
});

?>
<!-- ------------------------------------------------------------------------ -->

<!-- ------------------------------------------------------------------------ -->
<?php

(function($){
    $.fn.moveTo = function(selector){
        return this.each(function(){
            var cl = $(this).clone();
            $(cl).appendTo(selector);
            $(this).remove();
        });
    };
})(jQuery);

$('#nodeToMove').moveTo('#newParent');

?>
<!-- ------------------------------------------------------------------------ -->

<!-- ------------------------------------------------------------------------ -->
<?php

$('a[data-toggle="tab"]').on('show.bs.tab', function (e) {
  e.target // newly activated tab
  e.relatedTarget // previous active tab
});

?>
<!-- ------------------------------------------------------------------------ -->

<!-- ------------------------------------------------------------------------ -->
<?php

$('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
  e.target // newly activated tab
  e.relatedTarget // previous active tab
});

?>
<!-- ------------------------------------------------------------------------ -->

<!-- ------------------------------------------------------------------------ -->
<?php

$("p").remove(".test, .demo");

?>
<!-- ------------------------------------------------------------------------ -->