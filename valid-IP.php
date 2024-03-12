<?php
function validateIPv4($ip) {
    if (!is_string($ip) || empty($ip)) {
        return false;
    }

    $octets = explode('.', $ip);

    //make sure it's 4 sections
    if (count($octets) !== 4) {
        return false;
    }
    //check range in each section (positive and less than 255)
    foreach ($octets as $octet) {
        if (!ctype_digit($octet) || $octet < 0 || $octet > 255) {
            return false;
        }

        if (strlen($octet) > 1 && $octet[0] === '0') {
            return false;
        }
    }

    return true;
}

$ipAddress = "192.168.0.1";
if (validateIPv4($ipAddress)) {
    echo "The IP address $ipAddress is valid.\n";
} else {
    echo "The IP address $ipAddress is not valid.\n";
}
?>
