<?php

class ItemList
{

    /**
     * @var SimpleItem[] $SimpleItem
     */
    protected $SimpleItem = null;

    /**
     * @var ElementItem[] $ElementItem
     */
    protected $ElementItem = null;

    /**
     * @var ItemListExtension $Extension
     */
    protected $Extension = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return SimpleItem[]
     */
    public function getSimpleItem()
    {
      return $this->SimpleItem;
    }

    /**
     * @param SimpleItem[] $SimpleItem
     * @return ItemList
     */
    public function setSimpleItem(array $SimpleItem = null)
    {
      $this->SimpleItem = $SimpleItem;
      return $this;
    }

    /**
     * @return ElementItem[]
     */
    public function getElementItem()
    {
      return $this->ElementItem;
    }

    /**
     * @param ElementItem[] $ElementItem
     * @return ItemList
     */
    public function setElementItem(array $ElementItem = null)
    {
      $this->ElementItem = $ElementItem;
      return $this;
    }

    /**
     * @return ItemListExtension
     */
    public function getExtension()
    {
      return $this->Extension;
    }

    /**
     * @param ItemListExtension $Extension
     * @return ItemList
     */
    public function setExtension($Extension)
    {
      $this->Extension = $Extension;
      return $this;
    }

}
