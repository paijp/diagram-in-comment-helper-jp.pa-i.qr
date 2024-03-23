<?php

define('QR_FIND_BEST_MASK', false);
ini_set("error_reporting", false);
require(dirname(@$argv[0])."/phpqrcode.php");
print implode("\n", QRcode::text(@$argv[1]))."\n";
