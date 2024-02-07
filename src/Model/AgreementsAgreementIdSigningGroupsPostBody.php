<?php

namespace Struqtur\Zigned\Api\Model;

class AgreementsAgreementIdSigningGroupsPostBody extends \ArrayObject
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
     * The name of the signing group
     *
     * @var string
     */
    protected $name;
    /**
     * The order of the signing group. If omitted, the signing group will be added last in the signing order
     *
     * @var int
     */
    protected $order;
    /**
     * List of IDs for the participants you wish add to the signing group. Be aware, if signing groups are used then all participants must belong to a group. Any participant not assigned to a group will be added to the last one in order. Empty groups are deleted when the agreement is finalized for signing.
     *
     * @var string[]
     */
    protected $participants;
    /**
     * The name of the signing group
     *
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }
    /**
     * The name of the signing group
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
     * The order of the signing group. If omitted, the signing group will be added last in the signing order
     *
     * @return int
     */
    public function getOrder() : int
    {
        return $this->order;
    }
    /**
     * The order of the signing group. If omitted, the signing group will be added last in the signing order
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
     * List of IDs for the participants you wish add to the signing group. Be aware, if signing groups are used then all participants must belong to a group. Any participant not assigned to a group will be added to the last one in order. Empty groups are deleted when the agreement is finalized for signing.
     *
     * @return string[]
     */
    public function getParticipants() : array
    {
        return $this->participants;
    }
    /**
     * List of IDs for the participants you wish add to the signing group. Be aware, if signing groups are used then all participants must belong to a group. Any participant not assigned to a group will be added to the last one in order. Empty groups are deleted when the agreement is finalized for signing.
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