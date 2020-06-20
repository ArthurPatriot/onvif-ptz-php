<?php

class MessageDescription
{

    /**
     * @var ItemListDescription $Source
     */
    protected $Source = null;

    /**
     * @var ItemListDescription $Key
     */
    protected $Key = null;

    /**
     * @var ItemListDescription $Data
     */
    protected $Data = null;

    /**
     * @var MessageDescriptionExtension $Extension
     */
    protected $Extension = null;

    /**
     * @var boolean $IsProperty
     */
    protected $IsProperty = null;

    /**
     * @param boolean $IsProperty
     */
    public function __construct($IsProperty)
    {
      $this->IsProperty = $IsProperty;
    }

    /**
     * @return ItemListDescription
     */
    public function getSource()
    {
      return $this->Source;
    }

    /**
     * @param ItemListDescription $Source
     * @return MessageDescription
     */
    public function setSource($Source)
    {
      $this->Source = $Source;
      return $this;
    }

    /**
     * @return ItemListDescription
     */
    public function getKey()
    {
      return $this->Key;
    }

    /**
     * @param ItemListDescription $Key
     * @return MessageDescription
     */
    public function setKey($Key)
    {
      $this->Key = $Key;
      return $this;
    }

    /**
     * @return ItemListDescription
     */
    public function getData()
    {
      return $this->Data;
    }

    /**
     * @param ItemListDescription $Data
     * @return MessageDescription
     */
    public function setData($Data)
    {
      $this->Data = $Data;
      return $this;
    }

    /**
     * @return MessageDescriptionExtension
     */
    public function getExtension()
    {
      return $this->Extension;
    }

    /**
     * @param MessageDescriptionExtension $Extension
     * @return MessageDescription
     */
    public function setExtension($Extension)
    {
      $this->Extension = $Extension;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsProperty()
    {
      return $this->IsProperty;
    }

    /**
     * @param boolean $IsProperty
     * @return MessageDescription
     */
    public function setIsProperty($IsProperty)
    {
      $this->IsProperty = $IsProperty;
      return $this;
    }

}
