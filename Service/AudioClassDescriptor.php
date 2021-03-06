<?php

class AudioClassDescriptor
{

    /**
     * @var AudioClassCandidate[] $ClassCandidate
     */
    protected $ClassCandidate = null;

    /**
     * @var AudioClassDescriptorExtension $Extension
     */
    protected $Extension = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return AudioClassCandidate[]
     */
    public function getClassCandidate()
    {
      return $this->ClassCandidate;
    }

    /**
     * @param AudioClassCandidate[] $ClassCandidate
     * @return AudioClassDescriptor
     */
    public function setClassCandidate(array $ClassCandidate = null)
    {
      $this->ClassCandidate = $ClassCandidate;
      return $this;
    }

    /**
     * @return AudioClassDescriptorExtension
     */
    public function getExtension()
    {
      return $this->Extension;
    }

    /**
     * @param AudioClassDescriptorExtension $Extension
     * @return AudioClassDescriptor
     */
    public function setExtension($Extension)
    {
      $this->Extension = $Extension;
      return $this;
    }

}
