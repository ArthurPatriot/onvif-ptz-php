<?php

class OSDReference
{

    /**
     * @var ReferenceToken $_
     */
    protected $_ = null;

    /**
     * @param ReferenceToken $_
     */
    public function __construct($_)
    {
      $this->_ = $_;
    }

    /**
     * @return ReferenceToken
     */
    public function get_()
    {
      return $this->_;
    }

    /**
     * @param ReferenceToken $_
     * @return OSDReference
     */
    public function set_($_)
    {
      $this->_ = $_;
      return $this;
    }

}
