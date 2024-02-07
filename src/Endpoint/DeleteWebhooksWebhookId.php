<?php

namespace Struqtur\Zigned\Api\Endpoint;

class DeleteWebhooksWebhookId extends \Struqtur\Zigned\Api\Runtime\Client\BaseEndpoint implements \Struqtur\Zigned\Api\Runtime\Client\Endpoint
{
    protected $webhook_id;
    /**
     * Deletes a webhook created for the account associated with the authenticated client.
     *
     * @param string $webhookId DELETE /webhooks/:webhook_id parameter
     */
    public function __construct(string $webhookId)
    {
        $this->webhook_id = $webhookId;
    }
    use \Struqtur\Zigned\Api\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'DELETE';
    }
    public function getUri() : string
    {
        return str_replace(['{webhook_id}'], [$this->webhook_id], '/webhooks/{webhook_id}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        return [[], null];
    }
    public function getExtraHeaders() : array
    {
        return ['Accept' => ['application/json']];
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Struqtur\Zigned\Api\Exception\DeleteWebhooksWebhookIdBadRequestException
     *
     * @return null|\Struqtur\Zigned\Api\Model\WebhooksWebhookIdDeleteResponse200
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Struqtur\\Zigned\\Api\\Model\\WebhooksWebhookIdDeleteResponse200', 'json');
        }
        if (is_null($contentType) === false && (400 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Struqtur\Zigned\Api\Exception\DeleteWebhooksWebhookIdBadRequestException($serializer->deserialize($body, 'Struqtur\\Zigned\\Api\\Model\\WebhooksWebhookIdDeleteResponse400', 'json'), $response);
        }
    }
    public function getAuthenticationScopes() : array
    {
        return ['HTTP_1'];
    }
}