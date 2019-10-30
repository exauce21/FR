<?php


class MessageReceive extends AbstractMessage {

    private $message_open;

    /**
     * MessageReceive constructor.
     */
    public function __construct()
    {
    }


    /**
     * @return string
     */
    public function getMessageOpen()
    {
        return $this->message_open;
    }

    /**
     * @param string $message_open
     */
    public function setMessageOpen($message_open)
    {
        $this->message_open = $message_open;
    }


}