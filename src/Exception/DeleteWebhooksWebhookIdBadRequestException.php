<?php

namespace Struqtur\Zigned\Exception;

class DeleteWebhooksWebhookIdBadRequestException extends BadRequestException
{
    /**
     * @var \Struqtur\Zigned\Model\WebhooksWebhookIdDeleteResponse400
     */
    private $webhooksWebhookIdDeleteResponse400;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\Struqtur\Zigned\Model\WebhooksWebhookIdDeleteResponse400 $webhooksWebhookIdDeleteResponse400, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('DELETE /webhooks/:webhook_id Error response');
        $this->webhooksWebhookIdDeleteResponse400 = $webhooksWebhookIdDeleteResponse400;
        $this->response = $response;
    }
    public function getWebhooksWebhookIdDeleteResponse400() : \Struqtur\Zigned\Model\WebhooksWebhookIdDeleteResponse400
    {
        return $this->webhooksWebhookIdDeleteResponse400;
    }
    public function getResponse() : \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}