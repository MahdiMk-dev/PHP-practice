<?php
function flipOrderOfDigits($number) {
    return (int)strrev((string)$number);
}

$originalNumber = 12345;
$flippedNumber = flipOrderOfDigits($originalNumber);
echo "Original number: $originalNumber, Flipped number: $flippedNumber\n";

?>