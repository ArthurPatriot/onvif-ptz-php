<?php

class MediaUri
{

    /**
     * @var anyURI $Uri
     */
    protected $Uri = null;

    /**
     * @var boolean $InvalidAfterConnect
     */
    protected $InvalidAfterConnect = null;

    /**
     * @var boolean $InvalidAfterReboot
     */
    protected $InvalidAfterReboot = null;

    /**
     * @var duration $Timeout
     */
    protected $Timeout = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param anyURI $Uri
     * @param boolean $InvalidAfterConnect
     * @param boolean $InvalidAfterReboot
     * @param duration $Timeout
     * @param string $any
     */
    public function __construct($Uri, $InvalidAfterConnect, $InvalidAfterReboot, $Timeout, $any)
    {
      $this->Uri = $Uri;
      $this->InvalidAfterConnect = $InvalidAfterConnect;
      $this->InvalidAfterReboot = $InvalidAfterReboot;
      $this->Timeout = $Timeout;
      $this->any = $any;
    }

    /**
     * @return anyURI
     */
    public function getUri()
    {
      return $this->Uri;
    }

    /**
     * @param anyURI $Uri
     * @return MediaUri
     */
    public function setUri($Uri)
    {
      $this->Uri = $Uri;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getInvalidAfterConnect()
    {
      return $this->InvalidAfterConnect;
    }

    /**
     * @param boolean $InvalidAfterConnect
     * @return MediaUri
     */
    public function setInvalidAfterConnect($InvalidAfterConnect)
    {
      $this->InvalidAfterConnect = $InvalidAfterConnect;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getInvalidAfterReboot()
    {
      return $this->InvalidAfterReboot;
    }

    /**
     * @param boolean $InvalidAfterReboot
     * @return MediaUri
     */
    public function setInvalidAfterReboot($InvalidAfterReboot)
    {
      $this->InvalidAfterReboot = $InvalidAfterReboot;
      return $this;
    }

    /**
     * @return duration
     */
    public function getTimeout()
    {
      return $this->Timeout;
    }

    /**
     * @param duration $Timeout
     * @return MediaUri
     */
    public function setTimeout($Timeout)
    {
      $this->Timeout = $Timeout;
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
     * @return MediaUri
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
