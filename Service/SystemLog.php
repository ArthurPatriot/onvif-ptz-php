<?php

class SystemLog
{

    /**
     * @var AttachmentData $Binary
     */
    protected $Binary = null;

    /**
     * @var string $String
     */
    protected $String = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return AttachmentData
     */
    public function getBinary()
    {
      return $this->Binary;
    }

    /**
     * @param AttachmentData $Binary
     * @return SystemLog
     */
    public function setBinary($Binary)
    {
      $this->Binary = $Binary;
      return $this;
    }

    /**
     * @return string
     */
    public function getString()
    {
      return $this->String;
    }

    /**
     * @param string $String
     * @return SystemLog
     */
    public function setString($String)
    {
      $this->String = $String;
      return $this;
    }

}
