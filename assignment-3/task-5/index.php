<?php
function generatePassword($length) {
  
    $lowercase_chars = 'abcdefghijklmnopqrstuvwxyz';
    $uppercase_chars = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $numeric_chars = '0123456789';
    $special_chars = '!@#$%^&*()_+';


    $all_chars = $lowercase_chars . $uppercase_chars . $numeric_chars . $special_chars;

    $password = '';

    for ($i = 0; $i < $length; $i++) {
     
        $random_char = $all_chars[rand(0, strlen($all_chars) - 1)];

        $password .= $random_char;
    }

    return $password;
}


$password = generatePassword(12);

echo $password;
?>
