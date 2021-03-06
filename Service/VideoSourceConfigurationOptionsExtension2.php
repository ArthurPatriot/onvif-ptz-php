<?php

class VideoSourceConfigurationOptionsExtension2
{

    /**
     * @var SceneOrientationMode[] $SceneOrientationMode
     */
    protected $SceneOrientationMode = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param string $any
     */
    public function __construct($any)
    {
      $this->any = $any;
    }

    /**
     * @return SceneOrientationMode[]
     */
    public function getSceneOrientationMode()
    {
      return $this->SceneOrientationMode;
    }

    /**
     * @param SceneOrientationMode[] $SceneOrientationMode
     * @return VideoSourceConfigurationOptionsExtension2
     */
    public function setSceneOrientationMode(array $SceneOrientationMode = null)
    {
      $this->SceneOrientationMode = $SceneOrientationMode;
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
     * @return VideoSourceConfigurationOptionsExtension2
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
