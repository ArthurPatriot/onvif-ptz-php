<?php

class StorageReferencePath
{

    /**
     * @var ReferenceToken $StorageToken
     */
    protected $StorageToken = null;

    /**
     * @var string $RelativePath
     */
    protected $RelativePath = null;

    /**
     * @var StorageReferencePathExtension $Extension
     */
    protected $Extension = null;

    /**
     * @param ReferenceToken $StorageToken
     */
    public function __construct($StorageToken)
    {
      $this->StorageToken = $StorageToken;
    }

    /**
     * @return ReferenceToken
     */
    public function getStorageToken()
    {
      return $this->StorageToken;
    }

    /**
     * @param ReferenceToken $StorageToken
     * @return StorageReferencePath
     */
    public function setStorageToken($StorageToken)
    {
      $this->StorageToken = $StorageToken;
      return $this;
    }

    /**
     * @return string
     */
    public function getRelativePath()
    {
      return $this->RelativePath;
    }

    /**
     * @param string $RelativePath
     * @return StorageReferencePath
     */
    public function setRelativePath($RelativePath)
    {
      $this->RelativePath = $RelativePath;
      return $this;
    }

    /**
     * @return StorageReferencePathExtension
     */
    public function getExtension()
    {
      return $this->Extension;
    }

    /**
     * @param StorageReferencePathExtension $Extension
     * @return StorageReferencePath
     */
    public function setExtension($Extension)
    {
      $this->Extension = $Extension;
      return $this;
    }

}
