<?php

class AttributedURIType
{

    /**
     * @var anyURI $_
     */
    protected $_ = null;

    /**
     * @param anyURI $_
     */
    public function __construct($_)
    {
      $this->_ = $_;
    }

    /**
     * @return anyURI
     */
    public function get_()
    {
      return $this->_;
    }

    /**
     * @param anyURI $_
     * @return AttributedURIType
     */
    public function set_($_)
    {
      $this->_ = $_;
      return $this;
    }

}
