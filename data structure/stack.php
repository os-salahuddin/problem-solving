<?php
class stack
{
    private $stack;

    public function __construct()
    {
        $this->stack = [];
    }
    public function push($value)
    {
        array_push($this->stack, $value);
    }

    public function pop()
    {
        if(empty($this->stack)) return null;
        array_pop($this->stack);
    }

    public function isEmpty()
    {
        return empty($this->stack);
    }

    public function size()
    {
        return count($this->stack);
    }

    public function peek()
    {
        if(empty($this->stack)) return null;
        return end($this->stack);
    }
}

$stack = new stack();
$stack->push(10);
$stack->push(20);
$stack->pop();
echo $stack->peek();


/*
 * give me text so that i can explain it with youtube tech content

for below code
<?php
class stack
{
    private $stack;

    public function __construct()
    {
        $this->stack = [];
    }
    public function push($value)
    {
        array_push($this->stack, $value);
    }

    public function pop()
    {
        if(empty($this->stack)) return null;
        array_pop($this->stack);
    }

    public function isEmpty()
    {
        return empty($this->stack);
    }

    public function size()
    {
        return count($this->stack);
    }

    public function peek()
    {
        if(empty($this->stack)) return null;
        return end($this->stack);
    }
}

$stack = new stack();
$stack->push(10);
$stack->push(20);
$stack->pop();
echo $stack->peek();

ChatGPT
Hey everyone, welcome back to our tech session! Today, we're delving into the world of data structures with a closer look at stacks.

In computer science, a stack is a fundamental data structure that follows the Last In, First Out (LIFO) principle. Imagine a stack of plates at a buffet — you can only remove the top plate, and the last plate you add will be on top.

Now, let's dive into the code snippet we have here. We've defined a Stack class in PHP, equipped with essential stack operations.

First, we initialize our stack as an empty array in the constructor. This array will hold our stack elements.

Next up, we have the push method. This function adds an element to the top of the stack using the array_push function. It takes a value as input and pushes it onto the stack.

Then, we have the pop method. This function removes the top element from the stack, mimicking the behavior of popping off the top plate from our stack of plates. If the stack is empty, it returns null to indicate that there's nothing to pop.

We also have some utility methods like isEmpty, which checks if the stack is empty, and size, which returns the number of elements in the stack.

Lastly, we have the peek method. This function allows us to look at the top element of the stack without removing it. It returns the value of the top element.

To put our stack class to the test, we've created a stack object, pushed a couple of values (10 and 20) onto the stack, and then popped off one element. Finally, we peek at the top element of the stack, which is now 10.

And there you have it — a simple yet powerful implementation of a stack data structure in PHP. Stay tuned for more exciting tech explorations in our next video!
 * */