<?php

namespace Vendor\Library\Generated\Endpoint;

class PostWebhooks extends \Vendor\Library\Generated\Runtime\Client\BaseEndpoint implements \Vendor\Library\Generated\Runtime\Client\Endpoint
{
    /**
     * Create a new webhook. Use the webhook ID in subsequent requests.
     *
     * @param null|\Vendor\Library\Generated\Model\WebhooksPostBody $requestBody 
     */
    public function __construct(?\Vendor\Library\Generated\Model\WebhooksPostBody $requestBody = null)
    {
        $this->body = $requestBody;
    }
    use \Vendor\Library\Generated\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'POST';
    }
    public function getUri() : string
    {
        return '/webhooks';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        if ($this->body instanceof \Vendor\Library\Generated\Model\WebhooksPostBody) {
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
     * @throws \Vendor\Library\Generated\Exception\PostWebhooksBadRequestException
     *
     * @return null|\Vendor\Library\Generated\Model\WebhooksPostResponse200
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Vendor\\Library\\Generated\\Model\\WebhooksPostResponse200', 'json');
        }
        if (is_null($contentType) === false && (400 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Vendor\Library\Generated\Exception\PostWebhooksBadRequestException($serializer->deserialize($body, 'Vendor\\Library\\Generated\\Model\\WebhooksPostResponse400', 'json'), $response);
        }
    }
    public function getAuthenticationScopes() : array
    {
        return ['HTTP_1'];
    }
}