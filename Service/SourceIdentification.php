<?php

class SourceIdentification
{

    /**
     * @var string $Name
     */
    protected $Name = null;

    /**
     * @var ReferenceToken[] $Token
     */
    protected $Token = null;

    /**
     * @var SourceIdentificationExtension $Extension
     */
    protected $Extension = null;

    /**
     * @param string $Name
     * @param ReferenceToken[] $Token
     */
    public function __construct($Name, array $Token)
    {
      $this->Name = $Name;
      $this->Token = $Token;
    }

    /**
     * @return string
     */
    public function getName()
    {
      return $this->Name;
    }

    /**
     * @param string $Name
     * @return SourceIdentification
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

    /**
     * @return ReferenceToken[]
     */
    public function getToken()
    {
      return $this->Token;
    }

    /**
     * @param ReferenceToken[] $Token
     * @return SourceIdentification
     */
    public function setToken(array $Token)
    {
      $this->Token = $Token;
      return $this;
    }

    /**
     * @return SourceIdentificationExtension
     */
    public function getExtension()
    {
      return $this->Extension;
    }

    /**
     * @param SourceIdentificationExtension $Extension
     * @return SourceIdentification
     */
    public function setExtension($Extension)
    {
      $this->Extension = $Extension;
      return $this;
    }

}
