<?php

class OSDTextOptions
{

    /**
     * @var string[] $Type
     */
    protected $Type = null;

    /**
     * @var IntRange $FontSizeRange
     */
    protected $FontSizeRange = null;

    /**
     * @var string[] $DateFormat
     */
    protected $DateFormat = null;

    /**
     * @var string[] $TimeFormat
     */
    protected $TimeFormat = null;

    /**
     * @var OSDColorOptions $FontColor
     */
    protected $FontColor = null;

    /**
     * @var OSDColorOptions $BackgroundColor
     */
    protected $BackgroundColor = null;

    /**
     * @var OSDTextOptionsExtension $Extension
     */
    protected $Extension = null;

    /**
     * @param string[] $Type
     */
    public function __construct(array $Type)
    {
      $this->Type = $Type;
    }

    /**
     * @return string[]
     */
    public function getType()
    {
      return $this->Type;
    }

    /**
     * @param string[] $Type
     * @return OSDTextOptions
     */
    public function setType(array $Type)
    {
      $this->Type = $Type;
      return $this;
    }

    /**
     * @return IntRange
     */
    public function getFontSizeRange()
    {
      return $this->FontSizeRange;
    }

    /**
     * @param IntRange $FontSizeRange
     * @return OSDTextOptions
     */
    public function setFontSizeRange($FontSizeRange)
    {
      $this->FontSizeRange = $FontSizeRange;
      return $this;
    }

    /**
     * @return string[]
     */
    public function getDateFormat()
    {
      return $this->DateFormat;
    }

    /**
     * @param string[] $DateFormat
     * @return OSDTextOptions
     */
    public function setDateFormat(array $DateFormat = null)
    {
      $this->DateFormat = $DateFormat;
      return $this;
    }

    /**
     * @return string[]
     */
    public function getTimeFormat()
    {
      return $this->TimeFormat;
    }

    /**
     * @param string[] $TimeFormat
     * @return OSDTextOptions
     */
    public function setTimeFormat(array $TimeFormat = null)
    {
      $this->TimeFormat = $TimeFormat;
      return $this;
    }

    /**
     * @return OSDColorOptions
     */
    public function getFontColor()
    {
      return $this->FontColor;
    }

    /**
     * @param OSDColorOptions $FontColor
     * @return OSDTextOptions
     */
    public function setFontColor($FontColor)
    {
      $this->FontColor = $FontColor;
      return $this;
    }

    /**
     * @return OSDColorOptions
     */
    public function getBackgroundColor()
    {
      return $this->BackgroundColor;
    }

    /**
     * @param OSDColorOptions $BackgroundColor
     * @return OSDTextOptions
     */
    public function setBackgroundColor($BackgroundColor)
    {
      $this->BackgroundColor = $BackgroundColor;
      return $this;
    }

    /**
     * @return OSDTextOptionsExtension
     */
    public function getExtension()
    {
      return $this->Extension;
    }

    /**
     * @param OSDTextOptionsExtension $Extension
     * @return OSDTextOptions
     */
    public function setExtension($Extension)
    {
      $this->Extension = $Extension;
      return $this;
    }

}
