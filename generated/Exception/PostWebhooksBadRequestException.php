<?php

namespace Vendor\Library\Generated\Exception;

class PostWebhooksBadRequestException extends BadRequestException
{
    /**
     * @var \Vendor\Library\Generated\Model\WebhooksPostResponse400
     */
    private $webhooksPostResponse400;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\Vendor\Library\Generated\Model\WebhooksPostResponse400 $webhooksPostResponse400, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('POST /webhooks Error response');
        $this->webhooksPostResponse400 = $webhooksPostResponse400;
        $this->response = $response;
    }
    public function getWebhooksPostResponse400() : \Vendor\Library\Generated\Model\WebhooksPostResponse400
    {
        return $this->webhooksPostResponse400;
    }
    public function getResponse() : \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}