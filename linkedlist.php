<?php
class Node
{
    public $data;
    public $next;

    public function __construct($data)
    {
        $this->data = $data;
        $this->next = null;
    }
}
class LinkedList
{
    private $head;
    private $tail;

    public function __construct()
    {
        $this->head = null;
        $this->tail = null;
    }
    public function append($data)
    {
        $newNode = new Node($data);
        if($this->head === null) {
            $this->head = $newNode;
            $this->tail = $newNode;
        } else {
            $this->tail->next = $newNode;
            $this->tail = $newNode;
        }
    }

    public function display()
    {
        $current = $this->head;
        while($current !== null) {
            echo $current->data;
            $current = $current->next;
        }
        echo "\n";
    }
}

$linkList = new LinkedList();
$linkList->append(1);
$linkList->append(2);
$linkList->append(3);

$linkList->display();