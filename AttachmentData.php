<?php

class AttachmentData
{

    /**
     * @var IncludeCustom $Include
     */
    protected $Include = null;

    /**
     * @var anonymous23 $contentType
     */
    protected $contentType = null;

    /**
     * @param IncludeCustom $Include
     * @param anonymous23 $contentType
     */
    public function __construct($Include, $contentType)
    {
      $this->Include = $Include;
      $this->contentType = $contentType;
    }

    /**
     * @return IncludeCustom
     */
    public function getInclude()
    {
      return $this->Include;
    }

    /**
     * @param IncludeCustom $Include
     * @return AttachmentData
     */
    public function setInclude($Include)
    {
      $this->Include = $Include;
      return $this;
    }

    /**
     * @return anonymous23
     */
    public function getContentType()
    {
      return $this->contentType;
    }

    /**
     * @param anonymous23 $contentType
     * @return AttachmentData
     */
    public function setContentType($contentType)
    {
      $this->contentType = $contentType;
      return $this;
    }

}
