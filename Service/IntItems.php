<?php

class IntItems
{

    /**
     * @var int[] $Items
     */
    protected $Items = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return int[]
     */
    public function getItems()
    {
      return $this->Items;
    }

    /**
     * @param int[] $Items
     * @return IntItems
     */
    public function setItems(array $Items = null)
    {
      $this->Items = $Items;
      return $this;
    }

}
