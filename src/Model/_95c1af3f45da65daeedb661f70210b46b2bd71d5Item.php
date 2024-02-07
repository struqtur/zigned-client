<?php

namespace Struqtur\Zigned\Api\Model;

class _95c1af3f45da65daeedb661f70210b46b2bd71d5Item extends \ArrayObject
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
     * The unique identifier of the participant
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
     * The name of the participant. Required if no email is provided.
     *
     * @var string|null
     */
    protected $name;
    /**
     * The email of the participant. Required if agreemnt is configured to send emails.
     *
     * @var string|null
     */
    protected $email;
    /**
     * The status of the participant
     *
     * @var string
     */
    protected $status;
    /**
     * The queue number of the participant (if sequential signing order is enabled)
     *
     * @var float|null
     */
    protected $order;
    /**
     * 
     *
     * @var mixed
     */
    protected $signingGroup;
    /**
     * The unique identifier for the agreement this participant belongs to
     *
     * @var string
     */
    protected $agreement;
    /**
     * The URL to the signing room for the participant. Only available after the agreement has been finalized for signing.
     *
     * @var string|null
     */
    protected $signingRoomUrl;
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
     * The unique identifier of the participant
     *
     * @return string
     */
    public function getId() : string
    {
        return $this->id;
    }
    /**
     * The unique identifier of the participant
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
     * The name of the participant. Required if no email is provided.
     *
     * @return string|null
     */
    public function getName() : ?string
    {
        return $this->name;
    }
    /**
     * The name of the participant. Required if no email is provided.
     *
     * @param string|null $name
     *
     * @return self
     */
    public function setName(?string $name) : self
    {
        $this->initialized['name'] = true;
        $this->name = $name;
        return $this;
    }
    /**
     * The email of the participant. Required if agreemnt is configured to send emails.
     *
     * @return string|null
     */
    public function getEmail() : ?string
    {
        return $this->email;
    }
    /**
     * The email of the participant. Required if agreemnt is configured to send emails.
     *
     * @param string|null $email
     *
     * @return self
     */
    public function setEmail(?string $email) : self
    {
        $this->initialized['email'] = true;
        $this->email = $email;
        return $this;
    }
    /**
     * The status of the participant
     *
     * @return string
     */
    public function getStatus() : string
    {
        return $this->status;
    }
    /**
     * The status of the participant
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
     * The queue number of the participant (if sequential signing order is enabled)
     *
     * @return float|null
     */
    public function getOrder() : ?float
    {
        return $this->order;
    }
    /**
     * The queue number of the participant (if sequential signing order is enabled)
     *
     * @param float|null $order
     *
     * @return self
     */
    public function setOrder(?float $order) : self
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
    public function getSigningGroup()
    {
        return $this->signingGroup;
    }
    /**
     * 
     *
     * @param mixed $signingGroup
     *
     * @return self
     */
    public function setSigningGroup($signingGroup) : self
    {
        $this->initialized['signingGroup'] = true;
        $this->signingGroup = $signingGroup;
        return $this;
    }
    /**
     * The unique identifier for the agreement this participant belongs to
     *
     * @return string
     */
    public function getAgreement() : string
    {
        return $this->agreement;
    }
    /**
     * The unique identifier for the agreement this participant belongs to
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
     * The URL to the signing room for the participant. Only available after the agreement has been finalized for signing.
     *
     * @return string|null
     */
    public function getSigningRoomUrl() : ?string
    {
        return $this->signingRoomUrl;
    }
    /**
     * The URL to the signing room for the participant. Only available after the agreement has been finalized for signing.
     *
     * @param string|null $signingRoomUrl
     *
     * @return self
     */
    public function setSigningRoomUrl(?string $signingRoomUrl) : self
    {
        $this->initialized['signingRoomUrl'] = true;
        $this->signingRoomUrl = $signingRoomUrl;
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