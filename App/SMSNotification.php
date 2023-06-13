<?php

namespace App;

class SMSNotification
{
    /**
     * @var string $recipient
     */
    private string $recipient;
    /**
     * @var string $message
     */
    private string $message;

    /**
     * @return string
     */
    public function getRecipient(): string
    {
        return $this->recipient;
    }

    /**
     * @param string $recipient
     * @return $this
     */
    public function setRecipient(string $recipient): self
    {
        $this->recipient = $recipient;

        return $this;
    }

    /**
     * @return string
     */
    public function getMessage(): string
    {
        return $this->message;
    }

    /**
     * @param string $message
     * @return $this
     */
    public function setMessage(string $message): self
    {
        $this->message = $message;

        return $this;
    }

    public function sendSMS()
    {
        // ...
    }
}