<?php function filterAndSortNumbers($inputString) {
    preg_match_all('/\d+/', $inputString, $matches);
    $numbers = $matches[0];
    sort($numbers, SORT_NUMERIC);
    return $numbers;
}

$inputString = "hpd12aq3@8w$5";
$filteredAndSortedNumbers = filterAndSortNumbers($inputString);
print_r($filteredAndSortedNumbers);s
?>


