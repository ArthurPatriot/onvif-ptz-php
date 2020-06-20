<?php

class OSDTextConfiguration
{

    /**
     * @var string $Type
     */
    protected $Type = null;

    /**
     * @var string $DateFormat
     */
    protected $DateFormat = null;

    /**
     * @var string $TimeFormat
     */
    protected $TimeFormat = null;

    /**
     * @var int $FontSize
     */
    protected $FontSize = null;

    /**
     * @var OSDColor $FontColor
     */
    protected $FontColor = null;

    /**
     * @var OSDColor $BackgroundColor
     */
    protected $BackgroundColor = null;

    /**
     * @var string $PlainText
     */
    protected $PlainText = null;

    /**
     * @var OSDTextConfigurationExtension $Extension
     */
    protected $Extension = null;

    /**
     * @var boolean $IsPersistentText
     */
    protected $IsPersistentText = null;

    /**
     * @param string $Type
     * @param boolean $IsPersistentText
     */
    public function __construct($Type, $IsPersistentText)
    {
      $this->Type = $Type;
      $this->IsPersistentText = $IsPersistentText;
    }

    /**
     * @return string
     */
    public function getType()
    {
      return $this->Type;
    }

    /**
     * @param string $Type
     * @return OSDTextConfiguration
     */
    public function setType($Type)
    {
      $this->Type = $Type;
      return $this;
    }

    /**
     * @return string
     */
    public function getDateFormat()
    {
      return $this->DateFormat;
    }

    /**
     * @param string $DateFormat
     * @return OSDTextConfiguration
     */
    public function setDateFormat($DateFormat)
    {
      $this->DateFormat = $DateFormat;
      return $this;
    }

    /**
     * @return string
     */
    public function getTimeFormat()
    {
      return $this->TimeFormat;
    }

    /**
     * @param string $TimeFormat
     * @return OSDTextConfiguration
     */
    public function setTimeFormat($TimeFormat)
    {
      $this->TimeFormat = $TimeFormat;
      return $this;
    }

    /**
     * @return int
     */
    public function getFontSize()
    {
      return $this->FontSize;
    }

    /**
     * @param int $FontSize
     * @return OSDTextConfiguration
     */
    public function setFontSize($FontSize)
    {
      $this->FontSize = $FontSize;
      return $this;
    }

    /**
     * @return OSDColor
     */
    public function getFontColor()
    {
      return $this->FontColor;
    }

    /**
     * @param OSDColor $FontColor
     * @return OSDTextConfiguration
     */
    public function setFontColor($FontColor)
    {
      $this->FontColor = $FontColor;
      return $this;
    }

    /**
     * @return OSDColor
     */
    public function getBackgroundColor()
    {
      return $this->BackgroundColor;
    }

    /**
     * @param OSDColor $BackgroundColor
     * @return OSDTextConfiguration
     */
    public function setBackgroundColor($BackgroundColor)
    {
      $this->BackgroundColor = $BackgroundColor;
      return $this;
    }

    /**
     * @return string
     */
    public function getPlainText()
    {
      return $this->PlainText;
    }

    /**
     * @param string $PlainText
     * @return OSDTextConfiguration
     */
    public function setPlainText($PlainText)
    {
      $this->PlainText = $PlainText;
      return $this;
    }

    /**
     * @return OSDTextConfigurationExtension
     */
    public function getExtension()
    {
      return $this->Extension;
    }

    /**
     * @param OSDTextConfigurationExtension $Extension
     * @return OSDTextConfiguration
     */
    public function setExtension($Extension)
    {
      $this->Extension = $Extension;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsPersistentText()
    {
      return $this->IsPersistentText;
    }

    /**
     * @param boolean $IsPersistentText
     * @return OSDTextConfiguration
     */
    public function setIsPersistentText($IsPersistentText)
    {
      $this->IsPersistentText = $IsPersistentText;
      return $this;
    }

}
