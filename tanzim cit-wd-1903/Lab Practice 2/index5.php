<?php 

function checkPalindrome( $string )   
{
    // strip out whitespace
    $string = str_replace( ' ', '', $string );
    // return bool
    return $string == strrev( $string );
}  

// a string to check
$string = 'noon';

// call the function and check the return value
if( checkPalindrome( $string ) == true )
{
    // if function returns true
    echo 'String is a palindrome';
}
else
{
    // if function returns false
    echo 'string is not a palindrome';
}

?>


