<?php
require_once "../../vendor/autoload.php";

$UUID = \Paynl\DynamicUUID::generate(
    'SL-1234-1234',
    'abcdef1234567890abcdef1234567890abcdef12',
    'INV2018000178532'
);

echo $UUID;