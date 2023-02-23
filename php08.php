<?php

// Removing data from associative arrays -

$person = array( 'fname' => 'Hello', 'lname' => 'World' );

print_r( $person );

unset($person['lname']);
print_r( $person );