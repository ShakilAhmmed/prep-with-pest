<?php

namespace Shakilahmmed\Prep\Tree;

use Shakilahmmed\Prep\Tree\Node;

class Tree
{

    private $root;
    private $recursiveInorder;

    public function insert($data)
    {
        $newNode = new Node($data);
        if (!$this->root) {
            $this->root = $newNode;
        } else {
            $current = $this->root;
            while (true) {
                if ($data < $current->data) {
                    if ($current->left) {
                        $current = $current->left;
                    } else {
                        $current->left = $newNode;
                        break;
                    }
                } else if ($data > $current->data) {
                    if ($current->right) {
                        $current = $current->right;
                    } else {
                        $current->right = $newNode;
                        break;
                    }
                } else {
                    break;
                }
            }
        }

        return $this;
    }

    public function inorderWithRecusrion($root)
    {
        if ($root) {
            $this->inorderWithRecusrion($root->left);
            $this->recursiveInorder[] = $root->data;
            $this->inorderWithRecusrion($root->right);
        }
        return $this->recursiveInorder;
    }

    public function inorderWithOutRecusrion()
    {
        $stack = [];
        $result = [];
        $current = $this->root;
        while ($stack || $current) {
            if ($current) {
                $stack[] = $current;
                $current = $current->left;
            } else {
                $current = array_pop($stack);
                $result[] = $current->data;
                $current = $current->right;
            }
        }

        return $result;
    }

    public function root()
    {
        return $this->root;
    }
}
