<?php

namespace Vendor\Library\Generated\Model;

class WebhooksWebhookIdGetResponse200Data extends \ArrayObject
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
     * The unique identifier of the webhook endpoint
     *
     * @var string
     */
    protected $id;
    /**
     * The name of the webhook. This is only used to help you identify the webhook.
     *
     * @var string
     */
    protected $name;
    /**
     * 
     *
     * @var string
     */
    protected $resourceType;
    /**
     * The URL of the webhook endpoint. Must be HTTPS.
     *
     * @var string
     */
    protected $url;
    /**
     * The webhook secret. This is used tfor the HMAC signature of the webhook request, which is included in a header called x-zigned-request-signature
     *
     * @var string
     */
    protected $secret;
    /**
     * The type of the webhook endpoint. Development webhooks will only receive events from agreements with test_mode set to true.
     *
     * @var string
     */
    protected $type;
    /**
     * The scope of the webhook notifications. If set to user, only events related to the agreements created by the scoped user will be sent. If set to global, all events will be sent.
     *
     * @var mixed
     */
    protected $scope;
    /**
     * The status of the webhook. Only active webhooks will receive notifications.
     *
     * @var string
     */
    protected $status;
    /**
     * The events that the webhook is subscribed to.
     *
     * @var string[]
     */
    protected $subscriptions;
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
     * The unique identifier of the webhook endpoint
     *
     * @return string
     */
    public function getId() : string
    {
        return $this->id;
    }
    /**
     * The unique identifier of the webhook endpoint
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
     * The name of the webhook. This is only used to help you identify the webhook.
     *
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }
    /**
     * The name of the webhook. This is only used to help you identify the webhook.
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
     * The URL of the webhook endpoint. Must be HTTPS.
     *
     * @return string
     */
    public function getUrl() : string
    {
        return $this->url;
    }
    /**
     * The URL of the webhook endpoint. Must be HTTPS.
     *
     * @param string $url
     *
     * @return self
     */
    public function setUrl(string $url) : self
    {
        $this->initialized['url'] = true;
        $this->url = $url;
        return $this;
    }
    /**
     * The webhook secret. This is used tfor the HMAC signature of the webhook request, which is included in a header called x-zigned-request-signature
     *
     * @return string
     */
    public function getSecret() : string
    {
        return $this->secret;
    }
    /**
     * The webhook secret. This is used tfor the HMAC signature of the webhook request, which is included in a header called x-zigned-request-signature
     *
     * @param string $secret
     *
     * @return self
     */
    public function setSecret(string $secret) : self
    {
        $this->initialized['secret'] = true;
        $this->secret = $secret;
        return $this;
    }
    /**
     * The type of the webhook endpoint. Development webhooks will only receive events from agreements with test_mode set to true.
     *
     * @return string
     */
    public function getType() : string
    {
        return $this->type;
    }
    /**
     * The type of the webhook endpoint. Development webhooks will only receive events from agreements with test_mode set to true.
     *
     * @param string $type
     *
     * @return self
     */
    public function setType(string $type) : self
    {
        $this->initialized['type'] = true;
        $this->type = $type;
        return $this;
    }
    /**
     * The scope of the webhook notifications. If set to user, only events related to the agreements created by the scoped user will be sent. If set to global, all events will be sent.
     *
     * @return mixed
     */
    public function getScope()
    {
        return $this->scope;
    }
    /**
     * The scope of the webhook notifications. If set to user, only events related to the agreements created by the scoped user will be sent. If set to global, all events will be sent.
     *
     * @param mixed $scope
     *
     * @return self
     */
    public function setScope($scope) : self
    {
        $this->initialized['scope'] = true;
        $this->scope = $scope;
        return $this;
    }
    /**
     * The status of the webhook. Only active webhooks will receive notifications.
     *
     * @return string
     */
    public function getStatus() : string
    {
        return $this->status;
    }
    /**
     * The status of the webhook. Only active webhooks will receive notifications.
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
     * The events that the webhook is subscribed to.
     *
     * @return string[]
     */
    public function getSubscriptions() : array
    {
        return $this->subscriptions;
    }
    /**
     * The events that the webhook is subscribed to.
     *
     * @param string[] $subscriptions
     *
     * @return self
     */
    public function setSubscriptions(array $subscriptions) : self
    {
        $this->initialized['subscriptions'] = true;
        $this->subscriptions = $subscriptions;
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