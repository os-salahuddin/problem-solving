<?php

class positiveProcessor extends Processor
{
    public function __construct(Processor $nextProcessor)
    {
        parent::__construct($nextProcessor);
    }

    public function process(number $request)
    {
        if ($request->getNumber() > 0) {
            print_r("PositiveProcessor : " + $request->getNumber());
        }
        else
        {
            $this->process($request);
        }
    }
}