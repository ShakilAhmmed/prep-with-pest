<?php

use Shakilahmmed\Prep\Tree\Tree;

test('tree operations test', function () {

    $tree = new Tree();
    $tree->insert(10)
        ->insert(15)
        ->insert(25)
        ->insert(45)
        ->insert(3)
        ->insert(5)
        ->insert(7)
        ->insert(8)
        ->insert(6);

    $inorder = $tree->inorderWithOutRecusrion();
    $this->assertEquals([3, 5, 6, 7, 8, 10, 15, 25, 45], $inorder);
    $recusrionInorder = $tree->inorderWithRecusrion($tree->root());
    $this->assertEquals([3, 5, 6, 7, 8, 10, 15, 25, 45], $recusrionInorder);
});
