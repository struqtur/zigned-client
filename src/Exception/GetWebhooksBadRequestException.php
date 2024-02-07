<?php

namespace Struqtur\Zigned\Api\Exception;

class GetWebhooksBadRequestException extends BadRequestException
{
    /**
     * @var \Struqtur\Zigned\Api\Model\WebhooksGetResponse400
     */
    private $webhooksGetResponse400;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\Struqtur\Zigned\Api\Model\WebhooksGetResponse400 $webhooksGetResponse400, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('GET /webhooks Error response');
        $this->webhooksGetResponse400 = $webhooksGetResponse400;
        $this->response = $response;
    }
    public function getWebhooksGetResponse400() : \Struqtur\Zigned\Api\Model\WebhooksGetResponse400
    {
        return $this->webhooksGetResponse400;
    }
    public function getResponse() : \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}