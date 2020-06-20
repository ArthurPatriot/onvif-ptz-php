<?php

class ReceiverConfiguration
{

    /**
     * @var ReceiverMode $Mode
     */
    protected $Mode = null;

    /**
     * @var anyURI $MediaUri
     */
    protected $MediaUri = null;

    /**
     * @var StreamSetup $StreamSetup
     */
    protected $StreamSetup = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param ReceiverMode $Mode
     * @param anyURI $MediaUri
     * @param StreamSetup $StreamSetup
     * @param string $any
     */
    public function __construct($Mode, $MediaUri, $StreamSetup, $any)
    {
      $this->Mode = $Mode;
      $this->MediaUri = $MediaUri;
      $this->StreamSetup = $StreamSetup;
      $this->any = $any;
    }

    /**
     * @return ReceiverMode
     */
    public function getMode()
    {
      return $this->Mode;
    }

    /**
     * @param ReceiverMode $Mode
     * @return ReceiverConfiguration
     */
    public function setMode($Mode)
    {
      $this->Mode = $Mode;
      return $this;
    }

    /**
     * @return anyURI
     */
    public function getMediaUri()
    {
      return $this->MediaUri;
    }

    /**
     * @param anyURI $MediaUri
     * @return ReceiverConfiguration
     */
    public function setMediaUri($MediaUri)
    {
      $this->MediaUri = $MediaUri;
      return $this;
    }

    /**
     * @return StreamSetup
     */
    public function getStreamSetup()
    {
      return $this->StreamSetup;
    }

    /**
     * @param StreamSetup $StreamSetup
     * @return ReceiverConfiguration
     */
    public function setStreamSetup($StreamSetup)
    {
      $this->StreamSetup = $StreamSetup;
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
     * @return ReceiverConfiguration
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
