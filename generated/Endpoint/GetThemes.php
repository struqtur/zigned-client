<?php

namespace Vendor\Library\Generated\Endpoint;

class GetThemes extends \Vendor\Library\Generated\Runtime\Client\BaseEndpoint implements \Vendor\Library\Generated\Runtime\Client\Endpoint
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
    use \Vendor\Library\Generated\Runtime\Client\EndpointTrait;
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
     * @throws \Vendor\Library\Generated\Exception\GetThemesBadRequestException
     *
     * @return null|\Vendor\Library\Generated\Model\ThemesGetResponse200
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Vendor\\Library\\Generated\\Model\\ThemesGetResponse200', 'json');
        }
        if (is_null($contentType) === false && (400 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Vendor\Library\Generated\Exception\GetThemesBadRequestException($serializer->deserialize($body, 'Vendor\\Library\\Generated\\Model\\ThemesGetResponse400', 'json'), $response);
        }
    }
    public function getAuthenticationScopes() : array
    {
        return ['HTTP_1'];
    }
}