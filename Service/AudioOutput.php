<?php

class AudioOutput extends DeviceEntity
{

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param ReferenceToken $token
     * @param string $any
     */
    public function __construct($token, $any)
    {
      parent::__construct($token);
      $this->any = $any;
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
     * @return AudioOutput
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
