<?php

$sensitiveData = "Jesses";
$salt = bin2hex(random_bytes(16));
$pepper = "ASecretPepperString";

$dataToHash = $sensitiveData . $salt . $pepper;
$hash = hash("sha256", $dataToHash);


$sensitiveData = "Jesses2";
$storesalt = $salt;
$storehash = $hash;
$storepepper = "ASecretPepperString";

$dataToHash = $sensitiveData . $storesalt . $storepepper;
$userhash = hash("sha256", $dataToHash);

if ($storehash === $userhash) {
    echo "The data are the same";
}
else {
    echo "The data are not the same";
}