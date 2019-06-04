<?php


namespace Playground\DataStructures\LinkedList;


class NodeList extends Base
{
    /**
     * @var Node $head
     */
    public $head;

    /**
     * @var Node $current
     */
    public $current;

    /**
     * @var int $limit
     */
    public $limit;

    public function __construct(int $limit)
    {
        $this->limit   = $limit;
        $this->head    = new Node(0);
        $this->current = $this->head;

        $this->create($this->limit);
        $this->loop($this->head);
    }

    public function create($numbers)
    {
        for ($i=1; $i < $numbers; $i++)
        {
           $this->current = $this->add($this->current, $i);
        }
    }

    public function export()
    {
        return dump($this->head);
    }
}