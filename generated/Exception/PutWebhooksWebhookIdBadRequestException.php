<?php

namespace Vendor\Library\Generated\Exception;

class PutWebhooksWebhookIdBadRequestException extends BadRequestException
{
    /**
     * @var \Vendor\Library\Generated\Model\WebhooksWebhookIdPutResponse400
     */
    private $webhooksWebhookIdPutResponse400;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\Vendor\Library\Generated\Model\WebhooksWebhookIdPutResponse400 $webhooksWebhookIdPutResponse400, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('PUT /webhooks/:webhook_id Error response');
        $this->webhooksWebhookIdPutResponse400 = $webhooksWebhookIdPutResponse400;
        $this->response = $response;
    }
    public function getWebhooksWebhookIdPutResponse400() : \Vendor\Library\Generated\Model\WebhooksWebhookIdPutResponse400
    {
        return $this->webhooksWebhookIdPutResponse400;
    }
    public function getResponse() : \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}