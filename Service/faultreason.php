<?php

class faultreason
{

    /**
     * @var reasontext[] $Text
     */
    protected $Text = null;

    /**
     * @param reasontext[] $Text
     */
    public function __construct(array $Text)
    {
      $this->Text = $Text;
    }

    /**
     * @return reasontext[]
     */
    public function getText()
    {
      return $this->Text;
    }

    /**
     * @param reasontext[] $Text
     * @return faultreason
     */
    public function setText(array $Text)
    {
      $this->Text = $Text;
      return $this;
    }

}
