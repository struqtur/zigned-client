<?php

namespace Vendor\Library\Generated\Model;

class WebhooksGetResponse200 extends \ArrayObject
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
     * The version of the response schema
     *
     * @var string
     */
    protected $version;
    /**
     * A non-paginated list of the webhook resource.
     *
     * @var string
     */
    protected $resultType;
    /**
     * Data contains the webhook resource.
     *
     * @var string
     */
    protected $resourceType;
    /**
     * 
     *
     * @var _2048581c137c5b2130eb860e3ae37da196dfc25bItem[]
     */
    protected $data;
    /**
     * The version of the response schema
     *
     * @return string
     */
    public function getVersion() : string
    {
        return $this->version;
    }
    /**
     * The version of the response schema
     *
     * @param string $version
     *
     * @return self
     */
    public function setVersion(string $version) : self
    {
        $this->initialized['version'] = true;
        $this->version = $version;
        return $this;
    }
    /**
     * A non-paginated list of the webhook resource.
     *
     * @return string
     */
    public function getResultType() : string
    {
        return $this->resultType;
    }
    /**
     * A non-paginated list of the webhook resource.
     *
     * @param string $resultType
     *
     * @return self
     */
    public function setResultType(string $resultType) : self
    {
        $this->initialized['resultType'] = true;
        $this->resultType = $resultType;
        return $this;
    }
    /**
     * Data contains the webhook resource.
     *
     * @return string
     */
    public function getResourceType() : string
    {
        return $this->resourceType;
    }
    /**
     * Data contains the webhook resource.
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
     * 
     *
     * @return _2048581c137c5b2130eb860e3ae37da196dfc25bItem[]
     */
    public function getData() : array
    {
        return $this->data;
    }
    /**
     * 
     *
     * @param _2048581c137c5b2130eb860e3ae37da196dfc25bItem[] $data
     *
     * @return self
     */
    public function setData(array $data) : self
    {
        $this->initialized['data'] = true;
        $this->data = $data;
        return $this;
    }
}