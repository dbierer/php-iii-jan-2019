<?php
namespace src\ModSPL\StandardDatastructures\SplPriorityQueue;

class Queue extends \SplPriorityQueue
{
    public function compare($priority1, $priority2)
    {
        // Use the spaceship operator
        return $priority2 <=> $priority1;
    }
}