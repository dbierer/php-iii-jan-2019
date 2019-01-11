<?php
// Event Manager Class
namespace src\ModSPL\StandardDatastructures\SplPriorityQueue;

class EventManager {
    protected $events = [];

    public function attach($event, $listener, $priority){
        // Generate an event wrapper for each event
        if (!isset($this->events[$event])) {
			$this->events[$event]['event'] = new Event($event);
			$this->events[$event]['queue'] = new Queue;
		}
		
        // Add the listener to the queue
        $this->events[$event]['queue']->insert($listener, $priority);
        return true;
    }

    public function trigger($event){
        $this->notify($this->events[$event]['event']);
        return true;
    }

    protected function notify($eventObject){
        // Iterate the queue by priority and call listeners
        foreach ($this->events[$eventObject->getName()]['queue'] as $listener) {
            call_user_func($listener, $eventObject);
        }
    }
}
