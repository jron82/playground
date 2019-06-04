<?php


namespace Playground\DataStructures\LinkedList;


class Node
{
    /**
     * @var mixed $data
     */
    public $data;

    /**
     * @var Node|null $next
     */
    public $next;

    /**
     * Node constructor.
     * @param $data
     * @param $next
     */
    public function __construct($data, Node $next = null)
    {
        $this->data = $data;
        $this->next = $next;
    }

    public function callNext()
    {
        dump($this->data);

        if($this->next !== null)
        {
            $this->next->callNext();
        }
    }
}