<?php

namespace Struqtur\Zigned\Api\Endpoint;

class GetThemes extends \Struqtur\Zigned\Api\Runtime\Client\BaseEndpoint implements \Struqtur\Zigned\Api\Runtime\Client\Endpoint
{
    /**
     * Retrieves a paginated list of all themes created for the account
     *
     * @param array $queryParameters {
     *     @var string $limit GET /themes parameter
     *     @var string $page GET /themes parameter
     *     @var string $order_by GET /themes parameter
     *     @var string $start_date YYYY-MM-DDTHH:mm:ss.sssZ
     *     @var string $end_date YYYY-MM-DDTHH:mm:ss.sssZ
     * }
     */
    public function __construct(array $queryParameters = [])
    {
        $this->queryParameters = $queryParameters;
    }
    use \Struqtur\Zigned\Api\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return '/themes';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        return [[], null];
    }
    public function getExtraHeaders() : array
    {
        return ['Accept' => ['application/json']];
    }
    protected function getQueryOptionsResolver() : \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getQueryOptionsResolver();
        $optionsResolver->setDefined(['limit', 'page', 'order_by', 'start_date', 'end_date']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults(['limit' => '50', 'page' => '1']);
        $optionsResolver->addAllowedTypes('limit', ['string']);
        $optionsResolver->addAllowedTypes('page', ['string']);
        $optionsResolver->addAllowedTypes('order_by', ['string']);
        $optionsResolver->addAllowedTypes('start_date', ['string']);
        $optionsResolver->addAllowedTypes('end_date', ['string']);
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Struqtur\Zigned\Api\Exception\GetThemesBadRequestException
     *
     * @return null|\Struqtur\Zigned\Api\Model\ThemesGetResponse200
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Struqtur\\Zigned\\Api\\Model\\ThemesGetResponse200', 'json');
        }
        if (is_null($contentType) === false && (400 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Struqtur\Zigned\Api\Exception\GetThemesBadRequestException($serializer->deserialize($body, 'Struqtur\\Zigned\\Api\\Model\\ThemesGetResponse400', 'json'), $response);
        }
    }
    public function getAuthenticationScopes() : array
    {
        return ['HTTP_1'];
    }
}