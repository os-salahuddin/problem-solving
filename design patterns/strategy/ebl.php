<?php
require_once 'paymentInterface.php';
class ebl implements paymentInterface
{
    public function createTransaction()
    {
       return 'created';
    }
}