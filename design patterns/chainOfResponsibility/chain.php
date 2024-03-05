<?php

class chain
{
    private $chain;

    public function __construct()
    {
        $this->chain = new positiveProcessor(new negativeProcessor(null));
    }

    public function process($request)
    {
        $this->chain->process($request);
    }
}