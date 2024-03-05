<?php
require_once 'transaction.php';
require_once 'ebl.php';
require_once 'cbl.php';
$transaction = new transaction(new ebl());
echo $transaction->create();