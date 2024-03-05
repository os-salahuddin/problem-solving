<?php
require_once 'paymentInterface.php';
class cbl implements paymentInterface
{
    public function createTransaction()
    {
       return 'created';
    }
}