<?php

class ReverseOptions
{

    /**
     * @var ReverseMode[] $Mode
     */
    protected $Mode = null;

    /**
     * @var ReverseOptionsExtension $Extension
     */
    protected $Extension = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ReverseMode[]
     */
    public function getMode()
    {
      return $this->Mode;
    }

    /**
     * @param ReverseMode[] $Mode
     * @return ReverseOptions
     */
    public function setMode(array $Mode = null)
    {
      $this->Mode = $Mode;
      return $this;
    }

    /**
     * @return ReverseOptionsExtension
     */
    public function getExtension()
    {
      return $this->Extension;
    }

    /**
     * @param ReverseOptionsExtension $Extension
     * @return ReverseOptions
     */
    public function setExtension($Extension)
    {
      $this->Extension = $Extension;
      return $this;
    }

}
