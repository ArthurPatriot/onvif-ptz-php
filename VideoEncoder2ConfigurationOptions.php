<?php

class VideoEncoder2ConfigurationOptions
{

    /**
     * @var string $Encoding
     */
    protected $Encoding = null;

    /**
     * @var FloatRange $QualityRange
     */
    protected $QualityRange = null;

    /**
     * @var VideoResolution2[] $ResolutionsAvailable
     */
    protected $ResolutionsAvailable = null;

    /**
     * @var IntRange $BitrateRange
     */
    protected $BitrateRange = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @var IntAttrList $GovLengthRange
     */
    protected $GovLengthRange = null;

    /**
     * @var FloatAttrList $FrameRatesSupported
     */
    protected $FrameRatesSupported = null;

    /**
     * @var StringAttrList $ProfilesSupported
     */
    protected $ProfilesSupported = null;

    /**
     * @var boolean $ConstantBitRateSupported
     */
    protected $ConstantBitRateSupported = null;

    /**
     * @var boolean $GuaranteedFrameRateSupported
     */
    protected $GuaranteedFrameRateSupported = null;

    /**
     * @param string $Encoding
     * @param FloatRange $QualityRange
     * @param VideoResolution2[] $ResolutionsAvailable
     * @param IntRange $BitrateRange
     * @param string $any
     * @param IntAttrList $GovLengthRange
     * @param FloatAttrList $FrameRatesSupported
     * @param StringAttrList $ProfilesSupported
     * @param boolean $ConstantBitRateSupported
     * @param boolean $GuaranteedFrameRateSupported
     */
    public function __construct($Encoding, $QualityRange, array $ResolutionsAvailable, $BitrateRange, $any, $GovLengthRange, $FrameRatesSupported, $ProfilesSupported, $ConstantBitRateSupported, $GuaranteedFrameRateSupported)
    {
      $this->Encoding = $Encoding;
      $this->QualityRange = $QualityRange;
      $this->ResolutionsAvailable = $ResolutionsAvailable;
      $this->BitrateRange = $BitrateRange;
      $this->any = $any;
      $this->GovLengthRange = $GovLengthRange;
      $this->FrameRatesSupported = $FrameRatesSupported;
      $this->ProfilesSupported = $ProfilesSupported;
      $this->ConstantBitRateSupported = $ConstantBitRateSupported;
      $this->GuaranteedFrameRateSupported = $GuaranteedFrameRateSupported;
    }

    /**
     * @return string
     */
    public function getEncoding()
    {
      return $this->Encoding;
    }

    /**
     * @param string $Encoding
     * @return VideoEncoder2ConfigurationOptions
     */
    public function setEncoding($Encoding)
    {
      $this->Encoding = $Encoding;
      return $this;
    }

    /**
     * @return FloatRange
     */
    public function getQualityRange()
    {
      return $this->QualityRange;
    }

    /**
     * @param FloatRange $QualityRange
     * @return VideoEncoder2ConfigurationOptions
     */
    public function setQualityRange($QualityRange)
    {
      $this->QualityRange = $QualityRange;
      return $this;
    }

    /**
     * @return VideoResolution2[]
     */
    public function getResolutionsAvailable()
    {
      return $this->ResolutionsAvailable;
    }

    /**
     * @param VideoResolution2[] $ResolutionsAvailable
     * @return VideoEncoder2ConfigurationOptions
     */
    public function setResolutionsAvailable(array $ResolutionsAvailable)
    {
      $this->ResolutionsAvailable = $ResolutionsAvailable;
      return $this;
    }

    /**
     * @return IntRange
     */
    public function getBitrateRange()
    {
      return $this->BitrateRange;
    }

    /**
     * @param IntRange $BitrateRange
     * @return VideoEncoder2ConfigurationOptions
     */
    public function setBitrateRange($BitrateRange)
    {
      $this->BitrateRange = $BitrateRange;
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
     * @return VideoEncoder2ConfigurationOptions
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

    /**
     * @return IntAttrList
     */
    public function getGovLengthRange()
    {
      return $this->GovLengthRange;
    }

    /**
     * @param IntAttrList $GovLengthRange
     * @return VideoEncoder2ConfigurationOptions
     */
    public function setGovLengthRange($GovLengthRange)
    {
      $this->GovLengthRange = $GovLengthRange;
      return $this;
    }

    /**
     * @return FloatAttrList
     */
    public function getFrameRatesSupported()
    {
      return $this->FrameRatesSupported;
    }

    /**
     * @param FloatAttrList $FrameRatesSupported
     * @return VideoEncoder2ConfigurationOptions
     */
    public function setFrameRatesSupported($FrameRatesSupported)
    {
      $this->FrameRatesSupported = $FrameRatesSupported;
      return $this;
    }

    /**
     * @return StringAttrList
     */
    public function getProfilesSupported()
    {
      return $this->ProfilesSupported;
    }

    /**
     * @param StringAttrList $ProfilesSupported
     * @return VideoEncoder2ConfigurationOptions
     */
    public function setProfilesSupported($ProfilesSupported)
    {
      $this->ProfilesSupported = $ProfilesSupported;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getConstantBitRateSupported()
    {
      return $this->ConstantBitRateSupported;
    }

    /**
     * @param boolean $ConstantBitRateSupported
     * @return VideoEncoder2ConfigurationOptions
     */
    public function setConstantBitRateSupported($ConstantBitRateSupported)
    {
      $this->ConstantBitRateSupported = $ConstantBitRateSupported;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getGuaranteedFrameRateSupported()
    {
      return $this->GuaranteedFrameRateSupported;
    }

    /**
     * @param boolean $GuaranteedFrameRateSupported
     * @return VideoEncoder2ConfigurationOptions
     */
    public function setGuaranteedFrameRateSupported($GuaranteedFrameRateSupported)
    {
      $this->GuaranteedFrameRateSupported = $GuaranteedFrameRateSupported;
      return $this;
    }

}
