<?php

class BackupFile
{

    /**
     * @var string $Name
     */
    protected $Name = null;

    /**
     * @var AttachmentData $Data
     */
    protected $Data = null;

    /**
     * @param string $Name
     * @param AttachmentData $Data
     */
    public function __construct($Name, $Data)
    {
      $this->Name = $Name;
      $this->Data = $Data;
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
     * @return BackupFile
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

    /**
     * @return AttachmentData
     */
    public function getData()
    {
      return $this->Data;
    }

    /**
     * @param AttachmentData $Data
     * @return BackupFile
     */
    public function setData($Data)
    {
      $this->Data = $Data;
      return $this;
    }

}
