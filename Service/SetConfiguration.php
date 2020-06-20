<?php

class SetConfiguration
{

    /**
     * @var PTZConfiguration $PTZConfiguration
     */
    protected $PTZConfiguration = null;

    /**
     * @var boolean $ForcePersistence
     */
    protected $ForcePersistence = null;

    /**
     * @param PTZConfiguration $PTZConfiguration
     * @param boolean $ForcePersistence
     */
    public function __construct($PTZConfiguration, $ForcePersistence)
    {
      $this->PTZConfiguration = $PTZConfiguration;
      $this->ForcePersistence = $ForcePersistence;
    }

    /**
     * @return PTZConfiguration
     */
    public function getPTZConfiguration()
    {
      return $this->PTZConfiguration;
    }

    /**
     * @param PTZConfiguration $PTZConfiguration
     * @return SetConfiguration
     */
    public function setPTZConfiguration($PTZConfiguration)
    {
      $this->PTZConfiguration = $PTZConfiguration;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getForcePersistence()
    {
      return $this->ForcePersistence;
    }

    /**
     * @param boolean $ForcePersistence
     * @return SetConfiguration
     */
    public function setForcePersistence($ForcePersistence)
    {
      $this->ForcePersistence = $ForcePersistence;
      return $this;
    }

}
