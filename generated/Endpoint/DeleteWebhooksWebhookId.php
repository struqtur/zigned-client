<?php

namespace Vendor\Library\Generated\Endpoint;

class DeleteWebhooksWebhookId extends \Vendor\Library\Generated\Runtime\Client\BaseEndpoint implements \Vendor\Library\Generated\Runtime\Client\Endpoint
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
    use \Vendor\Library\Generated\Runtime\Client\EndpointTrait;
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
     * @throws \Vendor\Library\Generated\Exception\DeleteWebhooksWebhookIdBadRequestException
     *
     * @return null|\Vendor\Library\Generated\Model\WebhooksWebhookIdDeleteResponse200
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Vendor\\Library\\Generated\\Model\\WebhooksWebhookIdDeleteResponse200', 'json');
        }
        if (is_null($contentType) === false && (400 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Vendor\Library\Generated\Exception\DeleteWebhooksWebhookIdBadRequestException($serializer->deserialize($body, 'Vendor\\Library\\Generated\\Model\\WebhooksWebhookIdDeleteResponse400', 'json'), $response);
        }
    }
    public function getAuthenticationScopes() : array
    {
        return ['HTTP_1'];
    }
}