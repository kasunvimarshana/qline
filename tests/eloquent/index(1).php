<!-- --------------------------------------------------------------------------------------------------- -->
<?php

Schema::connection('mysql')->create('example', function($table)
{
    $table->increments('id');
});

Schema::connection('mysql')->table('example', function($table)
{
    $table->string('name');
});

?>
<!-- --------------------------------------------------------------------------------------------------- -->