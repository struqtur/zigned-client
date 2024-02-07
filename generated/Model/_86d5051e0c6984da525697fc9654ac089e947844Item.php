<?php

namespace Vendor\Library\Generated\Model;

class _86d5051e0c6984da525697fc9654ac089e947844Item extends \ArrayObject
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
     * The unique identifier of the sign event
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
     * The title of the event
     *
     * @var string
     */
    protected $title;
    /**
     * The description of the event
     *
     * @var string
     */
    protected $description;
    /**
     * The user agent of the browser which triggered the event
     *
     * @var string
     */
    protected $userAgent;
    /**
     * The IP address of the request which triggered the event
     *
     * @var string
     */
    protected $ipAddress;
    /**
     * 
     *
     * @var mixed
     */
    protected $participant;
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
     * The unique identifier of the sign event
     *
     * @return string
     */
    public function getId() : string
    {
        return $this->id;
    }
    /**
     * The unique identifier of the sign event
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
     * The title of the event
     *
     * @return string
     */
    public function getTitle() : string
    {
        return $this->title;
    }
    /**
     * The title of the event
     *
     * @param string $title
     *
     * @return self
     */
    public function setTitle(string $title) : self
    {
        $this->initialized['title'] = true;
        $this->title = $title;
        return $this;
    }
    /**
     * The description of the event
     *
     * @return string
     */
    public function getDescription() : string
    {
        return $this->description;
    }
    /**
     * The description of the event
     *
     * @param string $description
     *
     * @return self
     */
    public function setDescription(string $description) : self
    {
        $this->initialized['description'] = true;
        $this->description = $description;
        return $this;
    }
    /**
     * The user agent of the browser which triggered the event
     *
     * @return string
     */
    public function getUserAgent() : string
    {
        return $this->userAgent;
    }
    /**
     * The user agent of the browser which triggered the event
     *
     * @param string $userAgent
     *
     * @return self
     */
    public function setUserAgent(string $userAgent) : self
    {
        $this->initialized['userAgent'] = true;
        $this->userAgent = $userAgent;
        return $this;
    }
    /**
     * The IP address of the request which triggered the event
     *
     * @return string
     */
    public function getIpAddress() : string
    {
        return $this->ipAddress;
    }
    /**
     * The IP address of the request which triggered the event
     *
     * @param string $ipAddress
     *
     * @return self
     */
    public function setIpAddress(string $ipAddress) : self
    {
        $this->initialized['ipAddress'] = true;
        $this->ipAddress = $ipAddress;
        return $this;
    }
    /**
     * 
     *
     * @return mixed
     */
    public function getParticipant()
    {
        return $this->participant;
    }
    /**
     * 
     *
     * @param mixed $participant
     *
     * @return self
     */
    public function setParticipant($participant) : self
    {
        $this->initialized['participant'] = true;
        $this->participant = $participant;
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