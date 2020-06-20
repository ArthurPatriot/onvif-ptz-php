<?php

class AttributedUnsignedLongType
{

    /**
     * @var int $_
     */
    protected $_ = null;

    /**
     * @param int $_
     */
    public function __construct($_)
    {
      $this->_ = $_;
    }

    /**
     * @return int
     */
    public function get_()
    {
      return $this->_;
    }

    /**
     * @param int $_
     * @return AttributedUnsignedLongType
     */
    public function set_($_)
    {
      $this->_ = $_;
      return $this;
    }

}
