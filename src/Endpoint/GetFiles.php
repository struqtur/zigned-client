<?php

namespace Struqtur\Zigned\Endpoint;

class GetFiles extends \Struqtur\Zigned\Runtime\Client\BaseEndpoint implements \Struqtur\Zigned\Runtime\Client\Endpoint
{
    /**
     * Retrieves a paginated list of all files uploaded by the client or user
     *
     * @param array $queryParameters {
     *     @var string $limit GET /files parameter
     *     @var string $page The page of agreements to return. Default 1
     *     @var string $order_by The files are ordered by date in descending order by default.
     *     @var string $start_date The earliest creation date of the files to return.
     *     @var string $end_date The latest creation date of the files to return.
     *     @var string $mime_type Filters the file list for the specific mimetype.
     *     @var string $lookup_key The lookup key of the files to return
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
        return '/files';
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
        $optionsResolver->setDefined(['limit', 'page', 'order_by', 'start_date', 'end_date', 'mime_type', 'lookup_key']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults(['limit' => '50', 'page' => '1']);
        $optionsResolver->addAllowedTypes('limit', ['string']);
        $optionsResolver->addAllowedTypes('page', ['string']);
        $optionsResolver->addAllowedTypes('order_by', ['string']);
        $optionsResolver->addAllowedTypes('start_date', ['string']);
        $optionsResolver->addAllowedTypes('end_date', ['string']);
        $optionsResolver->addAllowedTypes('mime_type', ['string']);
        $optionsResolver->addAllowedTypes('lookup_key', ['string']);
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Struqtur\Zigned\Exception\GetFilesBadRequestException
     *
     * @return null|\Struqtur\Zigned\Model\FilesGetResponse200
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Struqtur\\Zigned\\Model\\FilesGetResponse200', 'json');
        }
        if (is_null($contentType) === false && (400 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Struqtur\Zigned\Exception\GetFilesBadRequestException($serializer->deserialize($body, 'Struqtur\\Zigned\\Model\\FilesGetResponse400', 'json'), $response);
        }
    }
    public function getAuthenticationScopes() : array
    {
        return ['HTTP_1'];
    }
}