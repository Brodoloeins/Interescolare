<?php

    $str = file_get_contents('https://maps.googleapis.com/maps/api/geocode/json?address=1600+Amphitheatre+Parkway+Mountain+View+CA&sensor=false&key=AIzaSyAMtmkfX-S7TlpakY5BV1UZr8icaxDgDaM');

    print_r($str);

?>