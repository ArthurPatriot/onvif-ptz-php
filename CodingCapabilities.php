<?php

class CodingCapabilities
{

    /**
     * @var AudioEncoderConfigurationOptions $AudioEncodingCapabilities
     */
    protected $AudioEncodingCapabilities = null;

    /**
     * @var AudioDecoderConfigurationOptions $AudioDecodingCapabilities
     */
    protected $AudioDecodingCapabilities = null;

    /**
     * @var VideoDecoderConfigurationOptions $VideoDecodingCapabilities
     */
    protected $VideoDecodingCapabilities = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param VideoDecoderConfigurationOptions $VideoDecodingCapabilities
     * @param string $any
     */
    public function __construct($VideoDecodingCapabilities, $any)
    {
      $this->VideoDecodingCapabilities = $VideoDecodingCapabilities;
      $this->any = $any;
    }

    /**
     * @return AudioEncoderConfigurationOptions
     */
    public function getAudioEncodingCapabilities()
    {
      return $this->AudioEncodingCapabilities;
    }

    /**
     * @param AudioEncoderConfigurationOptions $AudioEncodingCapabilities
     * @return CodingCapabilities
     */
    public function setAudioEncodingCapabilities($AudioEncodingCapabilities)
    {
      $this->AudioEncodingCapabilities = $AudioEncodingCapabilities;
      return $this;
    }

    /**
     * @return AudioDecoderConfigurationOptions
     */
    public function getAudioDecodingCapabilities()
    {
      return $this->AudioDecodingCapabilities;
    }

    /**
     * @param AudioDecoderConfigurationOptions $AudioDecodingCapabilities
     * @return CodingCapabilities
     */
    public function setAudioDecodingCapabilities($AudioDecodingCapabilities)
    {
      $this->AudioDecodingCapabilities = $AudioDecodingCapabilities;
      return $this;
    }

    /**
     * @return VideoDecoderConfigurationOptions
     */
    public function getVideoDecodingCapabilities()
    {
      return $this->VideoDecodingCapabilities;
    }

    /**
     * @param VideoDecoderConfigurationOptions $VideoDecodingCapabilities
     * @return CodingCapabilities
     */
    public function setVideoDecodingCapabilities($VideoDecodingCapabilities)
    {
      $this->VideoDecodingCapabilities = $VideoDecodingCapabilities;
      return $this;
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
     * @return CodingCapabilities
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
