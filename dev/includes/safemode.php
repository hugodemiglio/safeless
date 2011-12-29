<?php

function getSafeMode() {
    if (@ini_get("safe_mode") OR strtolower(@ini_get("safe_mode")) == "on") {
        return true;
    } else {
        return false;
    }
}

?>