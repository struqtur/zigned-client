<?php

namespace Vendor\Library\Generated\Exception;

class GetWebhooksWebhookIdBadRequestException extends BadRequestException
{
    /**
     * @var \Vendor\Library\Generated\Model\WebhooksWebhookIdGetResponse400
     */
    private $webhooksWebhookIdGetResponse400;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\Vendor\Library\Generated\Model\WebhooksWebhookIdGetResponse400 $webhooksWebhookIdGetResponse400, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('GET /webhooks/:webhook_id Error response');
        $this->webhooksWebhookIdGetResponse400 = $webhooksWebhookIdGetResponse400;
        $this->response = $response;
    }
    public function getWebhooksWebhookIdGetResponse400() : \Vendor\Library\Generated\Model\WebhooksWebhookIdGetResponse400
    {
        return $this->webhooksWebhookIdGetResponse400;
    }
    public function getResponse() : \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}