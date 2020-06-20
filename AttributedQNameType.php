<?php

class AttributedQNameType
{

    /**
     * @var QName $_
     */
    protected $_ = null;

    /**
     * @param QName $_
     */
    public function __construct($_)
    {
      $this->_ = $_;
    }

    /**
     * @return QName
     */
    public function get_()
    {
      return $this->_;
    }

    /**
     * @param QName $_
     * @return AttributedQNameType
     */
    public function set_($_)
    {
      $this->_ = $_;
      return $this;
    }

}
