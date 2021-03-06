<?php

class AACDecOptions
{

    /**
     * @var IntItems $Bitrate
     */
    protected $Bitrate = null;

    /**
     * @var IntItems $SampleRateRange
     */
    protected $SampleRateRange = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param IntItems $Bitrate
     * @param IntItems $SampleRateRange
     * @param string $any
     */
    public function __construct($Bitrate, $SampleRateRange, $any)
    {
      $this->Bitrate = $Bitrate;
      $this->SampleRateRange = $SampleRateRange;
      $this->any = $any;
    }

    /**
     * @return IntItems
     */
    public function getBitrate()
    {
      return $this->Bitrate;
    }

    /**
     * @param IntItems $Bitrate
     * @return AACDecOptions
     */
    public function setBitrate($Bitrate)
    {
      $this->Bitrate = $Bitrate;
      return $this;
    }

    /**
     * @return IntItems
     */
    public function getSampleRateRange()
    {
      return $this->SampleRateRange;
    }

    /**
     * @param IntItems $SampleRateRange
     * @return AACDecOptions
     */
    public function setSampleRateRange($SampleRateRange)
    {
      $this->SampleRateRange = $SampleRateRange;
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
     * @return AACDecOptions
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
