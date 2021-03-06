<?php

class ArrayOfFileProgress
{

    /**
     * @var FileProgress[] $FileProgress
     */
    protected $FileProgress = null;

    /**
     * @var ArrayOfFileProgressExtension $Extension
     */
    protected $Extension = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return FileProgress[]
     */
    public function getFileProgress()
    {
      return $this->FileProgress;
    }

    /**
     * @param FileProgress[] $FileProgress
     * @return ArrayOfFileProgress
     */
    public function setFileProgress(array $FileProgress = null)
    {
      $this->FileProgress = $FileProgress;
      return $this;
    }

    /**
     * @return ArrayOfFileProgressExtension
     */
    public function getExtension()
    {
      return $this->Extension;
    }

    /**
     * @param ArrayOfFileProgressExtension $Extension
     * @return ArrayOfFileProgress
     */
    public function setExtension($Extension)
    {
      $this->Extension = $Extension;
      return $this;
    }

}
