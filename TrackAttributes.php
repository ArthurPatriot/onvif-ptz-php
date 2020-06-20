<?php

class TrackAttributes
{

    /**
     * @var TrackInformation $TrackInformation
     */
    protected $TrackInformation = null;

    /**
     * @var VideoAttributes $VideoAttributes
     */
    protected $VideoAttributes = null;

    /**
     * @var AudioAttributes $AudioAttributes
     */
    protected $AudioAttributes = null;

    /**
     * @var MetadataAttributes $MetadataAttributes
     */
    protected $MetadataAttributes = null;

    /**
     * @var TrackAttributesExtension $Extension
     */
    protected $Extension = null;

    /**
     * @param TrackInformation $TrackInformation
     */
    public function __construct($TrackInformation)
    {
      $this->TrackInformation = $TrackInformation;
    }

    /**
     * @return TrackInformation
     */
    public function getTrackInformation()
    {
      return $this->TrackInformation;
    }

    /**
     * @param TrackInformation $TrackInformation
     * @return TrackAttributes
     */
    public function setTrackInformation($TrackInformation)
    {
      $this->TrackInformation = $TrackInformation;
      return $this;
    }

    /**
     * @return VideoAttributes
     */
    public function getVideoAttributes()
    {
      return $this->VideoAttributes;
    }

    /**
     * @param VideoAttributes $VideoAttributes
     * @return TrackAttributes
     */
    public function setVideoAttributes($VideoAttributes)
    {
      $this->VideoAttributes = $VideoAttributes;
      return $this;
    }

    /**
     * @return AudioAttributes
     */
    public function getAudioAttributes()
    {
      return $this->AudioAttributes;
    }

    /**
     * @param AudioAttributes $AudioAttributes
     * @return TrackAttributes
     */
    public function setAudioAttributes($AudioAttributes)
    {
      $this->AudioAttributes = $AudioAttributes;
      return $this;
    }

    /**
     * @return MetadataAttributes
     */
    public function getMetadataAttributes()
    {
      return $this->MetadataAttributes;
    }

    /**
     * @param MetadataAttributes $MetadataAttributes
     * @return TrackAttributes
     */
    public function setMetadataAttributes($MetadataAttributes)
    {
      $this->MetadataAttributes = $MetadataAttributes;
      return $this;
    }

    /**
     * @return TrackAttributesExtension
     */
    public function getExtension()
    {
      return $this->Extension;
    }

    /**
     * @param TrackAttributesExtension $Extension
     * @return TrackAttributes
     */
    public function setExtension($Extension)
    {
      $this->Extension = $Extension;
      return $this;
    }

}
