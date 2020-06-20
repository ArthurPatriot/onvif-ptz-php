<?php

class EndpointReferenceType
{

    /**
     * @var AttributedURIType $Address
     */
    protected $Address = null;

    /**
     * @var ReferenceParametersType $ReferenceParameters
     */
    protected $ReferenceParameters = null;

    /**
     * @var MetadataType $Metadata
     */
    protected $Metadata = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param AttributedURIType $Address
     * @param MetadataType $Metadata
     * @param string $any
     */
    public function __construct($Address, $Metadata, $any)
    {
      $this->Address = $Address;
      $this->Metadata = $Metadata;
      $this->any = $any;
    }

    /**
     * @return AttributedURIType
     */
    public function getAddress()
    {
      return $this->Address;
    }

    /**
     * @param AttributedURIType $Address
     * @return EndpointReferenceType
     */
    public function setAddress($Address)
    {
      $this->Address = $Address;
      return $this;
    }

    /**
     * @return ReferenceParametersType
     */
    public function getReferenceParameters()
    {
      return $this->ReferenceParameters;
    }

    /**
     * @param ReferenceParametersType $ReferenceParameters
     * @return EndpointReferenceType
     */
    public function setReferenceParameters($ReferenceParameters)
    {
      $this->ReferenceParameters = $ReferenceParameters;
      return $this;
    }

    /**
     * @return MetadataType
     */
    public function getMetadata()
    {
      return $this->Metadata;
    }

    /**
     * @param MetadataType $Metadata
     * @return EndpointReferenceType
     */
    public function setMetadata($Metadata)
    {
      $this->Metadata = $Metadata;
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
     * @return EndpointReferenceType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
