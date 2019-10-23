<!-- --------------------------------------------------------------------------------------------- -->
<?php
    echo round(9.5, 0, PHP_ROUND_HALF_UP);   // 10
    echo round(9.5, 0, PHP_ROUND_HALF_DOWN); // 9
    echo round(9.5, 0, PHP_ROUND_HALF_EVEN); // 10
    echo round(9.5, 0, PHP_ROUND_HALF_ODD);  // 9

    echo round(8.5, 0, PHP_ROUND_HALF_UP);   // 9
    echo round(8.5, 0, PHP_ROUND_HALF_DOWN); // 8
    echo round(8.5, 0, PHP_ROUND_HALF_EVEN); // 8
    echo round(8.5, 0, PHP_ROUND_HALF_ODD);  // 9
?>
<!-- --------------------------------------------------------------------------------------------- -->
<!-- --------------------------------------------------------------------------------------------- -->
<?php
    //number_format(number,decimals,decimalpoint,separator)
    //str_pad($value, 8, '0', STR_PAD_LEFT);
    //str_pad ( string $input , int $pad_length [, string $pad_string = " " [, int $pad_type = STR_PAD_RIGHT ]] ) : string
?>
<!-- --------------------------------------------------------------------------------------------- -->
<!-- --------------------------------------------------------------------------------------------- -->
<?php
    //str_pad(string,length,pad_string,pad_type)
    $input = "Alien";
    echo str_pad($input, 10);                      // produces "Alien     "
    echo str_pad($input, 10, "-=", STR_PAD_LEFT);  // produces "-=-=-Alien"
    echo str_pad($input, 10, "_", STR_PAD_BOTH);   // produces "__Alien___"
    echo str_pad($input,  6, "___");               // produces "Alien_"
    echo str_pad($input,  3, "*");                 // produces "Alien"
?>
<!-- --------------------------------------------------------------------------------------------- -->