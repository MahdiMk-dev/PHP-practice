<?php 
function evaluateOperation($operation) {
    $tokens = tokenizeOperation($operation);

    // Check if the tokens array has three elements: operand1, operator, operand2
    if (count($tokens) === 3) {
        $operand1 = stringToNumber($tokens[0]);
        $operator = $tokens[1];
        $operand2 = stringToNumber($tokens[2]);

        // Perform the calculation based on the operator
        if ($operator === '+') {
            return $operand1 + $operand2;
        } elseif ($operator === '-') {
            return $operand1 - $operand2;
        } elseif ($operator === '*') {
            return $operand1 * $operand2;
        } elseif ($operator === '/' && $operand2 != 0) {
            return $operand1 / $operand2;
        } else {
            return "Error: Invalid operator or division by zero";
        }
    } else {
        return "Error: Invalid input format";
    }
}

// Tokenize the operation string into an array of operands and operator
function tokenizeOperation($operation) {
    $tokens = [];
    $currentToken = '';

    for ($i = 0; $i < strlen($operation); $i++) {
        $char = $operation[$i];

        // Separate digits and operator
        if (is_numeric($char) || $char === '-') {
            $currentToken .= $char;
        } elseif ($char === '+' || $char === '-' || $char === '*' || $char === '/') {
            if ($currentToken !== '') {
                $tokens[] = $currentToken;
                $currentToken = '';
            }
            $tokens[] = $char;
        }
    }

    // Add the last token if present
    if ($currentToken !== '') {
        $tokens[] = $currentToken;
    }

    return $tokens;
}

// Convert a string to a number without using built-in functions
function stringToNumber($str) {
    $result = 0;
    $isNegative = false;

    for ($i = 0; $i < strlen($str); $i++) {
        $char = $str[$i];

        if ($char === '-') {
            $isNegative = true;
        } else {
            $digit = ord($char) - ord('0');
            $result = $result * 10 + $digit;
        }
    }

    return $isNegative ? -$result : $result;
}

// Example usage
$result = evaluateOperation("69+5");
echo "Result: $result\n";
?>

