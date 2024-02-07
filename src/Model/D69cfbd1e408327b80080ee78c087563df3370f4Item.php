<?php

namespace Struqtur\Zigned\Api\Model;

class D69cfbd1e408327b80080ee78c087563df3370f4Item extends \ArrayObject
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
     * The unique identifier of the signing group
     *
     * @var string
     */
    protected $id;
    /**
     * 
     *
     * @var string
     */
    protected $resourceType;
    /**
     * The name of the signing group
     *
     * @var string
     */
    protected $name;
    /**
     * The status of the signing group
     *
     * @var string
     */
    protected $status;
    /**
     * The queue number of the signing group
     *
     * @var float
     */
    protected $order;
    /**
     * 
     *
     * @var mixed
     */
    protected $participants;
    /**
     * The unique identifier of the agreement this signing group belongs to
     *
     * @var string
     */
    protected $agreement;
    /**
     * UTC datetime ISO string
     *
     * @var string
     */
    protected $createdAt;
    /**
     * UTC datetime ISO string
     *
     * @var string
     */
    protected $updatedAt;
    /**
     * The unique identifier of the signing group
     *
     * @return string
     */
    public function getId() : string
    {
        return $this->id;
    }
    /**
     * The unique identifier of the signing group
     *
     * @param string $id
     *
     * @return self
     */
    public function setId(string $id) : self
    {
        $this->initialized['id'] = true;
        $this->id = $id;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getResourceType() : string
    {
        return $this->resourceType;
    }
    /**
     * 
     *
     * @param string $resourceType
     *
     * @return self
     */
    public function setResourceType(string $resourceType) : self
    {
        $this->initialized['resourceType'] = true;
        $this->resourceType = $resourceType;
        return $this;
    }
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
     * The status of the signing group
     *
     * @return string
     */
    public function getStatus() : string
    {
        return $this->status;
    }
    /**
     * The status of the signing group
     *
     * @param string $status
     *
     * @return self
     */
    public function setStatus(string $status) : self
    {
        $this->initialized['status'] = true;
        $this->status = $status;
        return $this;
    }
    /**
     * The queue number of the signing group
     *
     * @return float
     */
    public function getOrder() : float
    {
        return $this->order;
    }
    /**
     * The queue number of the signing group
     *
     * @param float $order
     *
     * @return self
     */
    public function setOrder(float $order) : self
    {
        $this->initialized['order'] = true;
        $this->order = $order;
        return $this;
    }
    /**
     * 
     *
     * @return mixed
     */
    public function getParticipants()
    {
        return $this->participants;
    }
    /**
     * 
     *
     * @param mixed $participants
     *
     * @return self
     */
    public function setParticipants($participants) : self
    {
        $this->initialized['participants'] = true;
        $this->participants = $participants;
        return $this;
    }
    /**
     * The unique identifier of the agreement this signing group belongs to
     *
     * @return string
     */
    public function getAgreement() : string
    {
        return $this->agreement;
    }
    /**
     * The unique identifier of the agreement this signing group belongs to
     *
     * @param string $agreement
     *
     * @return self
     */
    public function setAgreement(string $agreement) : self
    {
        $this->initialized['agreement'] = true;
        $this->agreement = $agreement;
        return $this;
    }
    /**
     * UTC datetime ISO string
     *
     * @return string
     */
    public function getCreatedAt() : string
    {
        return $this->createdAt;
    }
    /**
     * UTC datetime ISO string
     *
     * @param string $createdAt
     *
     * @return self
     */
    public function setCreatedAt(string $createdAt) : self
    {
        $this->initialized['createdAt'] = true;
        $this->createdAt = $createdAt;
        return $this;
    }
    /**
     * UTC datetime ISO string
     *
     * @return string
     */
    public function getUpdatedAt() : string
    {
        return $this->updatedAt;
    }
    /**
     * UTC datetime ISO string
     *
     * @param string $updatedAt
     *
     * @return self
     */
    public function setUpdatedAt(string $updatedAt) : self
    {
        $this->initialized['updatedAt'] = true;
        $this->updatedAt = $updatedAt;
        return $this;
    }
}