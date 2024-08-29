<?php

$sensitiveData = "rishesh";

$salt = bin2hex(random_bytes(16)); //generate ramdon bytes of length 16

echo "<br>" . $salt;

$pepper = "spiderman";

$datatohash = $sensitiveData . $salt . $pepper;
$hash = hash("sha256", $datatohash);

echo "<br>" . $hash;
echo "<br> <br> <br>";
echo "--------------";
echo "<br> <br> <br>";

$userdata = "rishesh";

$storedsalt = $salt;
$storedhash = $hash;
$pepper ="spiderman";

$datatohash1 = $userdata . $storedsalt . $pepper;
$verification = hash("sha256", $datatohash1);
echo "<br>" . $verification;

if($storedhash == $verification)
{
    echo "<br>same";
}else
{
    echo "<br>not same";
}

