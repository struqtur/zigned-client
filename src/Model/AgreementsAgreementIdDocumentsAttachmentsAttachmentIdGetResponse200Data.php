<?php

namespace Struqtur\Zigned\Api\Model;

class AgreementsAgreementIdDocumentsAttachmentsAttachmentIdGetResponse200Data extends \ArrayObject
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
     * The unique identifier of the attachment
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
     * The unique identifier of the agreement which this attachment belongs to
     *
     * @var string
     */
    protected $agreement;
    /**
     * The order of this attachment relative to the other attachments
     *
     * @var int
     */
    protected $order;
    /**
     * 
     *
     * @var mixed
     */
    protected $file;
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
     * The unique identifier of the attachment
     *
     * @return string
     */
    public function getId() : string
    {
        return $this->id;
    }
    /**
     * The unique identifier of the attachment
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
     * The unique identifier of the agreement which this attachment belongs to
     *
     * @return string
     */
    public function getAgreement() : string
    {
        return $this->agreement;
    }
    /**
     * The unique identifier of the agreement which this attachment belongs to
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
     * The order of this attachment relative to the other attachments
     *
     * @return int
     */
    public function getOrder() : int
    {
        return $this->order;
    }
    /**
     * The order of this attachment relative to the other attachments
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
     * 
     *
     * @return mixed
     */
    public function getFile()
    {
        return $this->file;
    }
    /**
     * 
     *
     * @param mixed $file
     *
     * @return self
     */
    public function setFile($file) : self
    {
        $this->initialized['file'] = true;
        $this->file = $file;
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