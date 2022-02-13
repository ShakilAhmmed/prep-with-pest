<?php

namespace Shakilahmmed\Prep\LinkedList;

use Shakilahmmed\Prep\LinkedList\Node;

class LinkedListCycle
{

    public function hasCycle(Node $head)
    {
        if ($head == null || $head->next == null) {
            return false;
        }
        $slow = $head;
        $first = $head->next;

        while ($slow && $first && $first->next) {
            if ($slow == $first) {
                return true;
            }
            $slow = $slow->next;
            $first = $first->next->next;
        }
        return false;
    }
}
