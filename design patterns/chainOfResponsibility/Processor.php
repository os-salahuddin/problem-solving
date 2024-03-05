<?php

Abstract class Processor
{
    private $nextProcessor;

    public function __construct(Processor $nextProcessor)
    {  //emi
        $this->nextProcessor = $nextProcessor;
    }

    public function process(number $request)
    {
        if($this->nextProcessor != null) {
            $this->nextProcessor->process($request);
        }
    }
}