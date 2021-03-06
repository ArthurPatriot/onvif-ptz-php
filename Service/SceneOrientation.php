<?php

class SceneOrientation
{

    /**
     * @var SceneOrientationMode $Mode
     */
    protected $Mode = null;

    /**
     * @var string $Orientation
     */
    protected $Orientation = null;

    /**
     * @param SceneOrientationMode $Mode
     */
    public function __construct($Mode)
    {
      $this->Mode = $Mode;
    }

    /**
     * @return SceneOrientationMode
     */
    public function getMode()
    {
      return $this->Mode;
    }

    /**
     * @param SceneOrientationMode $Mode
     * @return SceneOrientation
     */
    public function setMode($Mode)
    {
      $this->Mode = $Mode;
      return $this;
    }

    /**
     * @return string
     */
    public function getOrientation()
    {
      return $this->Orientation;
    }

    /**
     * @param string $Orientation
     * @return SceneOrientation
     */
    public function setOrientation($Orientation)
    {
      $this->Orientation = $Orientation;
      return $this;
    }

}
