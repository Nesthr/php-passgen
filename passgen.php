<?php
    $length = $_GET["length"]; # Length of the password(s)
    $amount = $_GET["amount"]; # Amount of passwords to generate
    $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789"; # Characters to use for the password generation

    for($i = 0; $i < $amount; $i++) {
	echo substr(str_shuffle($chars), 0, $length); # Takes a portion of 'chars' specified by start and length, then shuffles it and prints it.
	echo "<br>"; # New line
    }

echo "<form method='post'> <input type='submit' name='generate' value='Generate' /> </form>"; # Button to refresh the page
?>
