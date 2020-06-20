<?php

class VideoResolution
{

    /**
     * @var int $Width
     */
    protected $Width = null;

    /**
     * @var int $Height
     */
    protected $Height = null;

    /**
     * @param int $Width
     * @param int $Height
     */
    public function __construct($Width, $Height)
    {
      $this->Width = $Width;
      $this->Height = $Height;
    }

    /**
     * @return int
     */
    public function getWidth()
    {
      return $this->Width;
    }

    /**
     * @param int $Width
     * @return VideoResolution
     */
    public function setWidth($Width)
    {
      $this->Width = $Width;
      return $this;
    }

    /**
     * @return int
     */
    public function getHeight()
    {
      return $this->Height;
    }

    /**
     * @param int $Height
     * @return VideoResolution
     */
    public function setHeight($Height)
    {
      $this->Height = $Height;
      return $this;
    }

}
