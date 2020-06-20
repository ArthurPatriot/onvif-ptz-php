<?php

class EventSubscription
{

    /**
     * @var FilterType $Filter
     */
    protected $Filter = null;

    /**
     * @var SubscriptionPolicy $SubscriptionPolicy
     */
    protected $SubscriptionPolicy = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param string $any
     */
    public function __construct($any)
    {
      $this->any = $any;
    }

    /**
     * @return FilterType
     */
    public function getFilter()
    {
      return $this->Filter;
    }

    /**
     * @param FilterType $Filter
     * @return EventSubscription
     */
    public function setFilter($Filter)
    {
      $this->Filter = $Filter;
      return $this;
    }

    /**
     * @return SubscriptionPolicy
     */
    public function getSubscriptionPolicy()
    {
      return $this->SubscriptionPolicy;
    }

    /**
     * @param SubscriptionPolicy $SubscriptionPolicy
     * @return EventSubscription
     */
    public function setSubscriptionPolicy($SubscriptionPolicy)
    {
      $this->SubscriptionPolicy = $SubscriptionPolicy;
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
     * @return EventSubscription
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
