<?php

namespace Shakilahmmed\Prep\LinkedList;

use Shakilahmmed\Prep\LinkedList\Node;

class MergeKSorted
{
    // Input: 1->2->4, 1->3->4
    // Output: 1->1->2->3->4->4
    private $dummy;

    public function __construct()
    {
        $this->dummy = new ListNode();
        $this->dummy->insert(0);
    }


    public function mergeTwoLists(Node $first, Node $second)
    {
        $tail = $this->dummy;

        while ($first && $second) {
            if ($first->data < $second->data) {
                $tail->next = $first;
                $first = $first->next;
            } else {
                $tail->next = $second;
                $second = $second->next;
            }
            $tail = $tail->next;
        }

        $tail->next = $first == null ? $second : $first;
    }

    public function toArray()
    {
        $currentNode = $this->dummy->next;
        $result = [];
        while ($currentNode) {
            $result[] = $currentNode->data;
            $currentNode = $currentNode->next;
        }

        return $result;
    }
}
