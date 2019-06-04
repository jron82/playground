<?php

namespace Playground\DataStructures\LinkedList;

use Ubench;

class Base
{
    public function add(Node $node, $data) : Node
    {
        $newNode    = new Node($data);
        $node->next =  $newNode;

        return $newNode;
    }

    public function loop(Node $head)
    {
        $bench = new Ubench;
        $bench->start();

        $head->callNext();

        $bench->end();
        dump($bench->getTime());
        dump($bench->getMemoryPeak());
    }
}