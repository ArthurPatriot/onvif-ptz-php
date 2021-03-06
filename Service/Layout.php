<?php

class Layout
{

    /**
     * @var PaneLayout[] $PaneLayout
     */
    protected $PaneLayout = null;

    /**
     * @var LayoutExtension $Extension
     */
    protected $Extension = null;

    /**
     * @param PaneLayout[] $PaneLayout
     */
    public function __construct(array $PaneLayout)
    {
      $this->PaneLayout = $PaneLayout;
    }

    /**
     * @return PaneLayout[]
     */
    public function getPaneLayout()
    {
      return $this->PaneLayout;
    }

    /**
     * @param PaneLayout[] $PaneLayout
     * @return Layout
     */
    public function setPaneLayout(array $PaneLayout)
    {
      $this->PaneLayout = $PaneLayout;
      return $this;
    }

    /**
     * @return LayoutExtension
     */
    public function getExtension()
    {
      return $this->Extension;
    }

    /**
     * @param LayoutExtension $Extension
     * @return Layout
     */
    public function setExtension($Extension)
    {
      $this->Extension = $Extension;
      return $this;
    }

}
