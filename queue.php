<?php

class Queue {
    public $queue = [];
    public $size;
    public $index = 0;

    public function __construct($size = 5) {
        $this->size = $size;
    }

    // Enqueue: Add item
    public function enqueue($data) {
        if ($this->index >= $this->size) {
            echo "Queue is overflow\n";
        } else {
            $this->queue[$this->index] = $data;
            $this->index++;
        }
    }

    // Dequeue: Remove item
    public function dequeue() {
        if ($this->isEmpty()) {
            echo "Queue is underflow\n";
        } else {
            array_shift($this->queue);
            $this->index--; 
        }
    }

    // Check if the queue is empty
    public function isEmpty() {
        return $this->index === 0;
    }
}


$s1 = new Queue();
$s1->enqueue(5);
$s1->enqueue(10);
$s1->enqueue(15);
$s1->enqueue(20);
$s1->enqueue(25);
$s1->enqueue(30);

print_r($s1->queue);

// Dequeue items
$s1->dequeue();
$s1->dequeue();
$s1->dequeue();
$s1->dequeue();



print_r($s1->queue);
?>
