<?php

class ProfileStatus
{

    /**
     * @var ActiveConnection[] $ActiveConnections
     */
    protected $ActiveConnections = null;

    /**
     * @var ProfileStatusExtension $Extension
     */
    protected $Extension = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ActiveConnection[]
     */
    public function getActiveConnections()
    {
      return $this->ActiveConnections;
    }

    /**
     * @param ActiveConnection[] $ActiveConnections
     * @return ProfileStatus
     */
    public function setActiveConnections(array $ActiveConnections = null)
    {
      $this->ActiveConnections = $ActiveConnections;
      return $this;
    }

    /**
     * @return ProfileStatusExtension
     */
    public function getExtension()
    {
      return $this->Extension;
    }

    /**
     * @param ProfileStatusExtension $Extension
     * @return ProfileStatus
     */
    public function setExtension($Extension)
    {
      $this->Extension = $Extension;
      return $this;
    }

}
