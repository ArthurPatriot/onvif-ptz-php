<?php

class EAPMethodConfiguration
{

    /**
     * @var TLSConfiguration $TLSConfiguration
     */
    protected $TLSConfiguration = null;

    /**
     * @var string $Password
     */
    protected $Password = null;

    /**
     * @var EapMethodExtension $Extension
     */
    protected $Extension = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return TLSConfiguration
     */
    public function getTLSConfiguration()
    {
      return $this->TLSConfiguration;
    }

    /**
     * @param TLSConfiguration $TLSConfiguration
     * @return EAPMethodConfiguration
     */
    public function setTLSConfiguration($TLSConfiguration)
    {
      $this->TLSConfiguration = $TLSConfiguration;
      return $this;
    }

    /**
     * @return string
     */
    public function getPassword()
    {
      return $this->Password;
    }

    /**
     * @param string $Password
     * @return EAPMethodConfiguration
     */
    public function setPassword($Password)
    {
      $this->Password = $Password;
      return $this;
    }

    /**
     * @return EapMethodExtension
     */
    public function getExtension()
    {
      return $this->Extension;
    }

    /**
     * @param EapMethodExtension $Extension
     * @return EAPMethodConfiguration
     */
    public function setExtension($Extension)
    {
      $this->Extension = $Extension;
      return $this;
    }

}
