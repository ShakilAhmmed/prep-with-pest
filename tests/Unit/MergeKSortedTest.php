<?php

use Shakilahmmed\Prep\LinkedList\ListNode;
use Shakilahmmed\Prep\LinkedList\MergeKSorted;

test('Test MergeKSorted List', function () {

    //Output: 1->1->2->3->4->4
    $firstNode = new ListNode();
    $firstNode->insert(1)->insert(2)->insert(4);

    $seconNode = new ListNode();
    $seconNode->insert(1)->insert(3)->insert(4);

    $resultNode = new ListNode();
    $resultNode->insert(1)->insert(1)->insert(2)->insert(3)->insert(4)->insert(4);

    $outputNode = new MergeKSorted();
    $outputNode->mergeTwoLists($firstNode->head, $seconNode->head);

    $this->assertEquals($resultNode->toArray(), $outputNode->toArray());
});
