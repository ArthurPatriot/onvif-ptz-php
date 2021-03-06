<?php

class Notify
{

    /**
     * @var NotificationMessageHolderType $NotificationMessage
     */
    protected $NotificationMessage = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param NotificationMessageHolderType $NotificationMessage
     * @param string $any
     */
    public function __construct($NotificationMessage, $any)
    {
      $this->NotificationMessage = $NotificationMessage;
      $this->any = $any;
    }

    /**
     * @return NotificationMessageHolderType
     */
    public function getNotificationMessage()
    {
      return $this->NotificationMessage;
    }

    /**
     * @param NotificationMessageHolderType $NotificationMessage
     * @return Notify
     */
    public function setNotificationMessage($NotificationMessage)
    {
      $this->NotificationMessage = $NotificationMessage;
      return $this;
    }

    /**
     * @return string
     */
    public function getAny()
    {
      return $this->any;
    }

    /**
     * @param string $any
     * @return Notify
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
