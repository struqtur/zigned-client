<?php

namespace Struqtur\Zigned\Endpoint;

class PutWebhooksWebhookId extends \Struqtur\Zigned\Runtime\Client\BaseEndpoint implements \Struqtur\Zigned\Runtime\Client\Endpoint
{
    protected $webhook_id;
    /**
     * Updates a webhook created by the account associated with the authenticated client.
     *
     * @param string $webhookId PUT /webhooks/:webhook_id parameter
     * @param null|\Struqtur\Zigned\Model\WebhooksWebhookIdPutBody $requestBody 
     */
    public function __construct(string $webhookId, ?\Struqtur\Zigned\Model\WebhooksWebhookIdPutBody $requestBody = null)
    {
        $this->webhook_id = $webhookId;
        $this->body = $requestBody;
    }
    use \Struqtur\Zigned\Runtime\Client\EndpointTrait;
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
        if ($this->body instanceof \Struqtur\Zigned\Model\WebhooksWebhookIdPutBody) {
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
     * @throws \Struqtur\Zigned\Exception\PutWebhooksWebhookIdBadRequestException
     *
     * @return null|\Struqtur\Zigned\Model\WebhooksWebhookIdPutResponse200
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Struqtur\\Zigned\\Model\\WebhooksWebhookIdPutResponse200', 'json');
        }
        if (is_null($contentType) === false && (400 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Struqtur\Zigned\Exception\PutWebhooksWebhookIdBadRequestException($serializer->deserialize($body, 'Struqtur\\Zigned\\Model\\WebhooksWebhookIdPutResponse400', 'json'), $response);
        }
    }
    public function getAuthenticationScopes() : array
    {
        return ['HTTP_1'];
    }
}