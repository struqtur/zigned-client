<?php

namespace Struqtur\Zigned\Model;

class AgreementsAgreementIdSigningGroupsSigningGroupIdPutBody extends \ArrayObject
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
     * @var string
     */
    protected $name;
    /**
     * 
     *
     * @var int
     */
    protected $order;
    /**
     * List of IDs for the participants you wish add to the signing group.
     *
     * @var string[]
     */
    protected $participants;
    /**
     * 
     *
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }
    /**
     * 
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name) : self
    {
        $this->initialized['name'] = true;
        $this->name = $name;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getOrder() : int
    {
        return $this->order;
    }
    /**
     * 
     *
     * @param int $order
     *
     * @return self
     */
    public function setOrder(int $order) : self
    {
        $this->initialized['order'] = true;
        $this->order = $order;
        return $this;
    }
    /**
     * List of IDs for the participants you wish add to the signing group.
     *
     * @return string[]
     */
    public function getParticipants() : array
    {
        return $this->participants;
    }
    /**
     * List of IDs for the participants you wish add to the signing group.
     *
     * @param string[] $participants
     *
     * @return self
     */
    public function setParticipants(array $participants) : self
    {
        $this->initialized['participants'] = true;
        $this->participants = $participants;
        return $this;
    }
}