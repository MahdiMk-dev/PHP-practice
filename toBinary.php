<?php
function decimalToBinary($decimal) {
    if (!is_int($decimal) || $decimal < 0) {
        return "Error: Input must be a non-negative integer.";
    }

    if ($decimal === 0) {
        return "0";
    }

    $binary = '';

    while ($decimal > 0) {
        $remainder = $decimal % 2;
        $binary = $remainder . $binary;
        $decimal = (int)($decimal / 2);
    }

    return $binary;
}

$decimalNumber = 123;
$binaryResult = decimalToBinary($decimalNumber);

echo "Binary representation of $decimalNumber is: $binaryResult\n";


?>
