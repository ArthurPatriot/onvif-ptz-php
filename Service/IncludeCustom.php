<?php

class IncludeCustom
{

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @var anyURI $href
     */
    protected $href = null;

    /**
     * @param string $any
     * @param anyURI $href
     */
    public function __construct($any, $href)
    {
      $this->any = $any;
      $this->href = $href;
    }

    /**
     * @return string
     */
    public function getAny()
    {
      return $this->any;
    }

    /**
     * @param string $any
     * @return Include
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

    /**
     * @return anyURI
     */
    public function getHref()
    {
      return $this->href;
    }

    /**
     * @param anyURI $href
     * @return Include
     */
    public function setHref($href)
    {
      $this->href = $href;
      return $this;
    }

}
