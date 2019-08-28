<?php
function pr($printr, $die = true) {
    echo "<pre>";
    print_r($printr);
    echo "</pre>";
    if ($die == true) {
        die();
    }
}
?>