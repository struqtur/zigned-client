<?php

namespace Vendor\Library\Generated\Model;

class WebhooksWebhookIdPutBody extends \ArrayObject
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
     * The URL which will receive the webhook notifications. Must be HTTPS.
     *
     * @var string
     */
    protected $url;
    /**
     * The name of the webhook. The name is only to help you identify the webhook in responses.
     *
     * @var string
     */
    protected $name;
    /**
     * The type of the webhook. If set to development, the webhooks will only be notified of agreements with test_mode set to true.
     *
     * @var string
     */
    protected $type;
    /**
     * The status of the webhook. Only active webhooks receive notifications.
     *
     * @var string
     */
    protected $status;
    /**
     * The scope of the webhook. If set to global, the webhook will be notified of all events for all agreements. If set to user, the webhook will only be notified of agreements created by the your account. If you are using client credentials, only global scope is available. Depending on your role, only a user scope may be allowed.
     *
     * @var mixed
     */
    protected $scope = 'user';
    /**
     * The events to subscribe to or unsubscribe from. To unsubscribe, set unsubscribe to true.
     *
     * @var mixed[]
     */
    protected $subscriptions = array();
    /**
     * The URL which will receive the webhook notifications. Must be HTTPS.
     *
     * @return string
     */
    public function getUrl() : string
    {
        return $this->url;
    }
    /**
     * The URL which will receive the webhook notifications. Must be HTTPS.
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
     * The name of the webhook. The name is only to help you identify the webhook in responses.
     *
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }
    /**
     * The name of the webhook. The name is only to help you identify the webhook in responses.
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
     * The type of the webhook. If set to development, the webhooks will only be notified of agreements with test_mode set to true.
     *
     * @return string
     */
    public function getType() : string
    {
        return $this->type;
    }
    /**
     * The type of the webhook. If set to development, the webhooks will only be notified of agreements with test_mode set to true.
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
     * The status of the webhook. Only active webhooks receive notifications.
     *
     * @return string
     */
    public function getStatus() : string
    {
        return $this->status;
    }
    /**
     * The status of the webhook. Only active webhooks receive notifications.
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
     * The scope of the webhook. If set to global, the webhook will be notified of all events for all agreements. If set to user, the webhook will only be notified of agreements created by the your account. If you are using client credentials, only global scope is available. Depending on your role, only a user scope may be allowed.
     *
     * @return mixed
     */
    public function getScope()
    {
        return $this->scope;
    }
    /**
     * The scope of the webhook. If set to global, the webhook will be notified of all events for all agreements. If set to user, the webhook will only be notified of agreements created by the your account. If you are using client credentials, only global scope is available. Depending on your role, only a user scope may be allowed.
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
     * The events to subscribe to or unsubscribe from. To unsubscribe, set unsubscribe to true.
     *
     * @return mixed[]
     */
    public function getSubscriptions() : array
    {
        return $this->subscriptions;
    }
    /**
     * The events to subscribe to or unsubscribe from. To unsubscribe, set unsubscribe to true.
     *
     * @param mixed[] $subscriptions
     *
     * @return self
     */
    public function setSubscriptions(array $subscriptions) : self
    {
        $this->initialized['subscriptions'] = true;
        $this->subscriptions = $subscriptions;
        return $this;
    }
}