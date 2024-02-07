<?php

namespace Vendor\Library\Generated\Model;

class WebhooksWebhookIdDeleteResponse200 extends \ArrayObject
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
     * Returns a single object of the webhook resource which was deleted.
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
     * The resource data that was deleted.
     *
     * @var WebhooksWebhookIdDeleteResponse200Data
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
     * Returns a single object of the webhook resource which was deleted.
     *
     * @return string
     */
    public function getResultType() : string
    {
        return $this->resultType;
    }
    /**
     * Returns a single object of the webhook resource which was deleted.
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
     * The resource data that was deleted.
     *
     * @return WebhooksWebhookIdDeleteResponse200Data
     */
    public function getData() : WebhooksWebhookIdDeleteResponse200Data
    {
        return $this->data;
    }
    /**
     * The resource data that was deleted.
     *
     * @param WebhooksWebhookIdDeleteResponse200Data $data
     *
     * @return self
     */
    public function setData(WebhooksWebhookIdDeleteResponse200Data $data) : self
    {
        $this->initialized['data'] = true;
        $this->data = $data;
        return $this;
    }
}