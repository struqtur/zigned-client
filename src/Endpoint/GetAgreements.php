<?php

namespace Struqtur\Zigned\Endpoint;

class GetAgreements extends \Struqtur\Zigned\Runtime\Client\BaseEndpoint implements \Struqtur\Zigned\Runtime\Client\Endpoint
{
    /**
     * Retrieves a paginated list of all agreements created by the authenticated client
     *
     * @param array $queryParameters {
     *     @var string $limit The number of agreements to return. Max 100
     *     @var string $page The page of agreements to return. Default 1
     *     @var string $order_by The agreements are ordered by date in descending order by default.
     *     @var string $status The status of the agreements to return.
     *     @var string $start_date The earliest creation date of the agreements to return.
     *     @var string $end_date The latest creation date of the agreements to return.
     *     @var string $lookup_key The lookup key of the agreements to return
     * }
     */
    public function __construct(array $queryParameters = [])
    {
        $this->queryParameters = $queryParameters;
    }
    use \Struqtur\Zigned\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return '/agreements';
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
        $optionsResolver->setDefined(['limit', 'page', 'order_by', 'status', 'start_date', 'end_date', 'lookup_key']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults(['limit' => '50', 'page' => '1']);
        $optionsResolver->addAllowedTypes('limit', ['string']);
        $optionsResolver->addAllowedTypes('page', ['string']);
        $optionsResolver->addAllowedTypes('order_by', ['string']);
        $optionsResolver->addAllowedTypes('status', ['string']);
        $optionsResolver->addAllowedTypes('start_date', ['string']);
        $optionsResolver->addAllowedTypes('end_date', ['string']);
        $optionsResolver->addAllowedTypes('lookup_key', ['string']);
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Struqtur\Zigned\Exception\GetAgreementsBadRequestException
     *
     * @return null|\Struqtur\Zigned\Model\AgreementsGetResponse200
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Struqtur\\Zigned\\Model\\AgreementsGetResponse200', 'json');
        }
        if (is_null($contentType) === false && (400 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Struqtur\Zigned\Exception\GetAgreementsBadRequestException($serializer->deserialize($body, 'Struqtur\\Zigned\\Model\\AgreementsGetResponse400', 'json'), $response);
        }
    }
    public function getAuthenticationScopes() : array
    {
        return ['HTTP_1'];
    }
}