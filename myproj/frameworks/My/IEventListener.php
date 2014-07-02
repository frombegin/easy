<?php

namespace My;

/**
 * Event handler
 * 
 * @version 1.0
 */
interface IEventListener {

    /**
     * 
     * @param event
     */
    public function handleEvent(Event $event);
}

