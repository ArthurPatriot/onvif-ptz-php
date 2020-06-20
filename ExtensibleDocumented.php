<?php

abstract class ExtensibleDocumented
{

    /**
     * @var Documentation $documentation
     */
    protected $documentation = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return Documentation
     */
    public function getDocumentation()
    {
      return $this->documentation;
    }

    /**
     * @param Documentation $documentation
     * @return ExtensibleDocumented
     */
    public function setDocumentation($documentation)
    {
      $this->documentation = $documentation;
      return $this;
    }

}
