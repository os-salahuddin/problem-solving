<?php
class transaction
{
    private $gateway;

    public function __construct($gateway)
    {
        $this->gateway = $gateway;
    }
    public function create()
    {
        return $this->gateway->createTransaction();
    }
}