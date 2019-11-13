<!-- ------------------------------------------------------------------------ -->
<?php

$.ajax({
  url: url,
  dataType: "script",
  success: success
});

?>
<!-- ------------------------------------------------------------------------ -->

<!-- ------------------------------------------------------------------------ -->
<?php

$.getScript( "ajax/test.js", function( data, textStatus, jqxhr ) {
  console.log( data ); // Data returned
  console.log( textStatus ); // Success
  console.log( jqxhr.status ); // 200
  console.log( "Load was performed." );
});

?>
<!-- ------------------------------------------------------------------------ -->

<!-- ------------------------------------------------------------------------ -->
<?php

$.getScript( "ajax/test.js" )
  .done(function( script, textStatus ) {
    console.log( textStatus );
  })
  .fail(function( jqxhr, settings, exception ) {
    $( "div.log" ).text( "Triggered ajaxError handler." );
});

?>
<!-- ------------------------------------------------------------------------ -->

<!-- ------------------------------------------------------------------------ -->
<?php

$( "div.log" ).ajaxError(function( e, jqxhr, settings, exception ) {
  if ( settings.dataType == "script" ) {
    $( this ).text( "Triggered ajaxError handler." );
  }
});

?>
<!-- ------------------------------------------------------------------------ -->

<!-- ------------------------------------------------------------------------ -->
<?php

$.ajaxSetup({
  cache: true
});

?>
<!-- ------------------------------------------------------------------------ -->

<!-- ------------------------------------------------------------------------ -->
<?php

jQuery.cachedScript = function( url, options ) {
 
  // Allow user to set any option except for dataType, cache, and url
  options = $.extend( options || {}, {
    dataType: "script",
    cache: true,
    url: url
  });
 
  // Use $.ajax() since it is more flexible than $.getScript
  // Return the jqXHR object so we can chain callbacks
  return jQuery.ajax( options );
};
 
// Usage
$.cachedScript( "ajax/test.js" ).done(function( script, textStatus ) {
  console.log( textStatus );
});

?>
<!-- ------------------------------------------------------------------------ -->

<!-- ------------------------------------------------------------------------ -->
<?php

$( "form" ).submit(function() {
  return this.some_flag_variable;
});

$( "form" ).first().submit();

?>
<!-- ------------------------------------------------------------------------ -->

<!-- ------------------------------------------------------------------------ -->
<?php

$("#simpleform").on("submit", function (event) {
    var $this = $(this);
    var frmValues = $this.serialize();
    $.ajax({
        type: $this.attr('method'),
        url: $this.attr('action'),
        data: frmValues
    })
    .done(function () {
        $("#para").text("Serialized! Input String is " + frmValues);
    })
    .fail(function () {
        $("#para").text("An error occured");
    });
    event.preventDefault(); 
});

$("#simpleform").on("submit", function (event) { });

?>
<!-- ------------------------------------------------------------------------ -->

<!-- ------------------------------------------------------------------------ -->
<?php

$("#simpleform").on("submit", function (event) {
    var frmValues = $this.serializeArray()
        .filter(function (elem) {
            return $.trim(elem.value) != "";
        });
});

?>
<!-- ------------------------------------------------------------------------ -->

<!-- ------------------------------------------------------------------------ -->
<?php ?>

<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
  $("input").select(function(){
    $("input").after(" Text marked!");
  });
  $("button").click(function(){
    $("input").trigger("select");
  });
});
</script>
</head>
<body>

<input type="text" value="Hello World"><br><br>

<button>Trigger the select event for the input field</button>

</body>
</html>

<?php ?>
<!-- ------------------------------------------------------------------------ -->

<!-- ------------------------------------------------------------------------ -->
<?php

$( "body" ).trigger({
  type:"logged",
  user:"foo",
  pass:"bar"
});

?>
<!-- ------------------------------------------------------------------------ -->

<!-- ------------------------------------------------------------------------ -->
<?php

var event = jQuery.Event( "logged" );
event.user = "foo";
event.pass = "bar";
$( "body" ).trigger( event );

?>
<!-- ------------------------------------------------------------------------ -->

<!-- ------------------------------------------------------------------------ -->
<?php

$( "p" )
  .click(function( event, a, b ) {
    // When a normal click fires, a and b are undefined
    // for a trigger like below a refers to "foo" and b refers to "bar"
  })
  .trigger( "click", [ "foo", "bar" ] );

?>
<!-- ------------------------------------------------------------------------ -->

<!-- ------------------------------------------------------------------------ -->
<?php

$( "#foo" ).on( "custom", function( event, param1, param2 ) {
  alert( param1 + "\n" + param2 );
});
$( "#foo").trigger( "custom", [ "Custom", "Event" ] );

?>
<!-- ------------------------------------------------------------------------ -->