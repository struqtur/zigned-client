<?php

namespace Struqtur\Zigned\Api\Endpoint;

class PutWebhooksWebhookId extends \Struqtur\Zigned\Api\Runtime\Client\BaseEndpoint implements \Struqtur\Zigned\Api\Runtime\Client\Endpoint
{
    protected $webhook_id;
    /**
     * Updates a webhook created by the account associated with the authenticated client.
     *
     * @param string $webhookId PUT /webhooks/:webhook_id parameter
     * @param null|\Struqtur\Zigned\Api\Model\WebhooksWebhookIdPutBody $requestBody 
     */
    public function __construct(string $webhookId, ?\Struqtur\Zigned\Api\Model\WebhooksWebhookIdPutBody $requestBody = null)
    {
        $this->webhook_id = $webhookId;
        $this->body = $requestBody;
    }
    use \Struqtur\Zigned\Api\Runtime\Client\EndpointTrait;
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
        if ($this->body instanceof \Struqtur\Zigned\Api\Model\WebhooksWebhookIdPutBody) {
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
     * @throws \Struqtur\Zigned\Api\Exception\PutWebhooksWebhookIdBadRequestException
     *
     * @return null|\Struqtur\Zigned\Api\Model\WebhooksWebhookIdPutResponse200
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Struqtur\\Zigned\\Api\\Model\\WebhooksWebhookIdPutResponse200', 'json');
        }
        if (is_null($contentType) === false && (400 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Struqtur\Zigned\Api\Exception\PutWebhooksWebhookIdBadRequestException($serializer->deserialize($body, 'Struqtur\\Zigned\\Api\\Model\\WebhooksWebhookIdPutResponse400', 'json'), $response);
        }
    }
    public function getAuthenticationScopes() : array
    {
        return ['HTTP_1'];
    }
}