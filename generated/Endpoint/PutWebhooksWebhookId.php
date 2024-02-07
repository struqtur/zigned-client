<?php

namespace Vendor\Library\Generated\Endpoint;

class PutWebhooksWebhookId extends \Vendor\Library\Generated\Runtime\Client\BaseEndpoint implements \Vendor\Library\Generated\Runtime\Client\Endpoint
{
    protected $webhook_id;
    /**
     * Updates a webhook created by the account associated with the authenticated client.
     *
     * @param string $webhookId PUT /webhooks/:webhook_id parameter
     * @param null|\Vendor\Library\Generated\Model\WebhooksWebhookIdPutBody $requestBody 
     */
    public function __construct(string $webhookId, ?\Vendor\Library\Generated\Model\WebhooksWebhookIdPutBody $requestBody = null)
    {
        $this->webhook_id = $webhookId;
        $this->body = $requestBody;
    }
    use \Vendor\Library\Generated\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'PUT';
    }
    public function getUri() : string
    {
        return str_replace(['{webhook_id}'], [$this->webhook_id], '/webhooks/{webhook_id}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        if ($this->body instanceof \Vendor\Library\Generated\Model\WebhooksWebhookIdPutBody) {
            return [['Content-Type' => ['application/json']], $serializer->serialize($this->body, 'json')];
        }
        return [[], null];
    }
    public function getExtraHeaders() : array
    {
        return ['Accept' => ['application/json']];
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Vendor\Library\Generated\Exception\PutWebhooksWebhookIdBadRequestException
     *
     * @return null|\Vendor\Library\Generated\Model\WebhooksWebhookIdPutResponse200
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Vendor\\Library\\Generated\\Model\\WebhooksWebhookIdPutResponse200', 'json');
        }
        if (is_null($contentType) === false && (400 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Vendor\Library\Generated\Exception\PutWebhooksWebhookIdBadRequestException($serializer->deserialize($body, 'Vendor\\Library\\Generated\\Model\\WebhooksWebhookIdPutResponse400', 'json'), $response);
        }
    }
    public function getAuthenticationScopes() : array
    {
        return ['HTTP_1'];
    }
}