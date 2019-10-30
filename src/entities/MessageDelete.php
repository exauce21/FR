<?php


class MessageDelete extends AbstractMessage{

    private $message_open;
    private $message_delete_time;
    private $message_type;

    /**
     * MessageDelete constructor.
     */
    public function __construct()
    {
    }

    /**
     * @return mixed
     */
    public function getMessageOpen()
    {
        return $this->message_open;
    }

    /**
     * @param mixed $message_open
     */
    public function setMessageOpen($message_open)
    {
        $this->message_open = $message_open;
    }

    /**
     * @return mixed
     */
    public function getMessageDeleteTime()
    {
        return $this->message_delete_time;
    }

    /**
     * @param mixed $message_delete_time
     */
    public function setMessageDeleteTime($message_delete_time)
    {
        $this->message_delete_time = $message_delete_time;
    }

    /**
     * @return mixed
     */
    public function getMessageType()
    {
        return $this->message_type;
    }

    /**
     * @param mixed $message_type
     */
    public function setMessageType($message_type)
    {
        $this->message_type = $message_type;
    }


}
