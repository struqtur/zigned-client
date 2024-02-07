<?php

namespace Vendor\Library\Generated\Endpoint;

class GetWebhooksWebhookId extends \Vendor\Library\Generated\Runtime\Client\BaseEndpoint implements \Vendor\Library\Generated\Runtime\Client\Endpoint
{
    protected $webhook_id;
    /**
     * Retrieves a webhook created by the account associated with the authenticated client.
     *
     * @param string $webhookId GET /webhooks/:webhook_id parameter
     */
    public function __construct(string $webhookId)
    {
        $this->webhook_id = $webhookId;
    }
    use \Vendor\Library\Generated\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
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
     * @throws \Vendor\Library\Generated\Exception\GetWebhooksWebhookIdBadRequestException
     *
     * @return null|\Vendor\Library\Generated\Model\WebhooksWebhookIdGetResponse200
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Vendor\\Library\\Generated\\Model\\WebhooksWebhookIdGetResponse200', 'json');
        }
        if (is_null($contentType) === false && (400 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Vendor\Library\Generated\Exception\GetWebhooksWebhookIdBadRequestException($serializer->deserialize($body, 'Vendor\\Library\\Generated\\Model\\WebhooksWebhookIdGetResponse400', 'json'), $response);
        }
    }
    public function getAuthenticationScopes() : array
    {
        return ['HTTP_1'];
    }
}