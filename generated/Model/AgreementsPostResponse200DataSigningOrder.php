<?php

namespace Vendor\Library\Generated\Model;

class AgreementsPostResponse200DataSigningOrder extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property) : bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * 
     *
     * @var bool
     */
    protected $enabled;
    /**
     * 
     *
     * @var bool
     */
    protected $grouped;
    /**
     * 
     *
     * @return bool
     */
    public function getEnabled() : bool
    {
        return $this->enabled;
    }
    /**
     * 
     *
     * @param bool $enabled
     *
     * @return self
     */
    public function setEnabled(bool $enabled) : self
    {
        $this->initialized['enabled'] = true;
        $this->enabled = $enabled;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getGrouped() : bool
    {
        return $this->grouped;
    }
    /**
     * 
     *
     * @param bool $grouped
     *
     * @return self
     */
    public function setGrouped(bool $grouped) : self
    {
        $this->initialized['grouped'] = true;
        $this->grouped = $grouped;
        return $this;
    }
}