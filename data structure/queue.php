<?php
class Queue
{
    private $item;
    public function __construct()
    {
        $this->item = [];
    }

    public function enqueue($value)
    {
        if($this->isEmpty()) {
            return null;
        }
        array_push($this->item, $value);
    }

    public function dequeue()
    {
        if($this->isEmpty()) {
            return null;
        }
        array_shift($this->item);
    }

    public function isEmpty()
    {
        return empty($this->item);
    }

    public function size()
    {
        return count($this->item);
    }

    public function peek()
    {
       if($this->isEmpty()) {
           return null;
       }
       return $this->item[0];
    }
}


$queue = new Queue();
$queue->enqueue(10);
$queue->enqueue(20);
$queue->dequeue();
echo $queue->peek();