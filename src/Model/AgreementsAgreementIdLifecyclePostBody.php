<?php

namespace Struqtur\Zigned\Model;

class AgreementsAgreementIdLifecyclePostBody extends \ArrayObject
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
     * The lifecycle state of the agreement
     *
     * @var mixed
     */
    protected $lifecycleState;
    /**
     * The lifecycle state of the agreement
     *
     * @return mixed
     */
    public function getLifecycleState()
    {
        return $this->lifecycleState;
    }
    /**
     * The lifecycle state of the agreement
     *
     * @param mixed $lifecycleState
     *
     * @return self
     */
    public function setLifecycleState($lifecycleState) : self
    {
        $this->initialized['lifecycleState'] = true;
        $this->lifecycleState = $lifecycleState;
        return $this;
    }
}