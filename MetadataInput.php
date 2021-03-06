<?php

class MetadataInput
{

    /**
     * @var Config[] $MetadataConfig
     */
    protected $MetadataConfig = null;

    /**
     * @var MetadataInputExtension $Extension
     */
    protected $Extension = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return Config[]
     */
    public function getMetadataConfig()
    {
      return $this->MetadataConfig;
    }

    /**
     * @param Config[] $MetadataConfig
     * @return MetadataInput
     */
    public function setMetadataConfig(array $MetadataConfig = null)
    {
      $this->MetadataConfig = $MetadataConfig;
      return $this;
    }

    /**
     * @return MetadataInputExtension
     */
    public function getExtension()
    {
      return $this->Extension;
    }

    /**
     * @param MetadataInputExtension $Extension
     * @return MetadataInput
     */
    public function setExtension($Extension)
    {
      $this->Extension = $Extension;
      return $this;
    }

}
