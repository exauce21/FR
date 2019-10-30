<?php


abstract class AbstractMessage
{
    private $message_object;
    private $message_text;
    private $sender_email;
    private $receiver_email;
    private $company_sender;
    private $company_receiver;
    private $message_date;

    /**
     * AbstractMessage constructor.
     */
    public function __construct()
    {
    }


    /**
     * @return mixed
     */
    public function getMessageObject()
    {
        return $this->message_object;
    }

    /**
     * @param mixed $message_object
     */
    public function setMessageObject($message_object)
    {
        $this->message_object = $message_object;
    }

    /**
     * @return mixed
     */
    public function getMessageText()
    {
        return $this->message_text;
    }

    /**
     * @param mixed $message_text
     */
    public function setMessageText($message_text)
    {
        $this->message_text = $message_text;
    }

    /**
     * @return mixed
     */
    public function getSenderEmail()
    {
        return $this->sender_email;
    }

    /**
     * @param mixed $sender_email
     */
    public function setSenderEmail($sender_email)
    {
        $this->sender_email = $sender_email;
    }

    /**
     * @return mixed
     */
    public function getReceiverEmail()
    {
        return $this->receiver_email;
    }

    /**
     * @param mixed $receiver_email
     */
    public function setReceiverEmail($receiver_email)
    {
        $this->receiver_email = $receiver_email;
    }

    /**
     * @return mixed
     */
    public function getCompanySender()
    {
        return $this->company_sender;
    }

    /**
     * @param mixed $company_sender
     */
    public function setCompanySender($company_sender)
    {
        $this->company_sender = $company_sender;
    }

    /**
     * @return mixed
     */
    public function getCompanyReceiver()
    {
        return $this->company_receiver;
    }

    /**
     * @param mixed $company_receiver
     */
    public function setCompanyReceiver($company_receiver)
    {
        $this->company_receiver = $company_receiver;
    }

    /**
     * @return mixed
     */
    public function getMessageDate()
    {
        return $this->message_date;
    }

    /**
     * @param mixed $message_date
     */
    public function setMessageDate($message_date)
    {
        $this->message_date = $message_date;
    }


}