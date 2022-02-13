<?php

namespace Shakilahmmed\Prep\LinkedList;

class ListNode
{
    public $head;
    public $tail;

    public function insert($value)
    {
        $newNode = new Node($value);
        if (!$this->head) {
            $this->head = $newNode;
            $this->tail = $newNode;
        } else {
            $this->tail->next = $newNode;
            $this->tail = $newNode;
        }

        return $this;
    }

    public function traverse()
    {
        $currentNode = $this->head;
        while ($currentNode) {
            echo $currentNode->data . PHP_EOL;
            $currentNode = $currentNode->next;
        }
    }

    public function insertAtBeg($value)
    {
        $newNode = new Node($value);
        $newNode->next = $this->head;
        $this->head = $newNode;
        return $this;
    }

    public function insertAtEnd($value)
    {
        $newNode = new Node($value);
        $this->tail->next = $newNode;
        $this->tail = $newNode;
        return $this;
    }

    public function insertAtPosition($value, $position)
    {
        $newNode = new Node($value);
        $positionIndex = $this->traverseAt($position - 1);
        $tempNode = $positionIndex->next;
        $positionIndex->next = $newNode;
        $newNode->next = $tempNode;
        return $this;
    }

    public function traverseAt($position)
    {
        $currentNode = $this->head;
        $currentPosition = 0;
        while ($position != $currentPosition) {
            $currentNode = $currentNode->next;
            $currentPosition++;
        }

        return $currentNode;
    }

    public function reverse()
    {
        $current = $this->head;
        $prev = null;
        $next = null;

        while ($current) {

            $next = $current->next;
            $current->next = $prev;
            $prev = $current;


            $current = $next; // for iteration
        }

        $this->tail = $this->head;
        $this->head = $prev;
        return $this;
    }

    public function deleteFromBeg()
    {
        $this->head = $this->head->next;
        return $this;
    }

    public function deleteFromEnd()
    {
        $currentNode = $this->head;
        while ($currentNode->next->next) {
            $currentNode = $currentNode->next;
        }
        $currentNode->next = null;
        $this->tail = $currentNode;
        return $this;
    }

    public function toArray()
    {
        $currentNode = $this->head;
        $result = [];
        while ($currentNode) {
            $result[] = $currentNode->data;
            $currentNode = $currentNode->next;
        }

        return $result;
    }
}
