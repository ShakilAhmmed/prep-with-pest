<?php

use Shakilahmmed\Prep\LinkedList\LinkedListCycle;
use Shakilahmmed\Prep\LinkedList\ListNode;

test('Linked List Cycle', function () {
    $firstNode = new ListNode();
    $firstNode->insert(1)->insert(2)->insert(4);

    $cycle = new LinkedListCycle();
    $this->assertEquals(false, $cycle->hasCycle($firstNode->head));

    $secondNode = new ListNode();
    $secondNode->insert(1)->insert(2)->insert(5);
    $secondNode->tail->next = $secondNode->head;
    $cycleSecond = new LinkedListCycle();
    $this->assertEquals(true, $cycleSecond->hasCycle($secondNode->head));
});
