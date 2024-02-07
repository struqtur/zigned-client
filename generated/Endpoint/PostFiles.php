<?php

namespace Vendor\Library\Generated\Endpoint;

class PostFiles extends \Vendor\Library\Generated\Runtime\Client\BaseEndpoint implements \Vendor\Library\Generated\Runtime\Client\Endpoint
{
    /**
     * Upload a file to your archive. Use the file ID in subsequent requests.
     *
     * @param null|\Vendor\Library\Generated\Model\FilesPostBody $requestBody 
     */
    public function __construct(?\Vendor\Library\Generated\Model\FilesPostBody $requestBody = null)
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
        return '/files';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        if ($this->body instanceof \Vendor\Library\Generated\Model\FilesPostBody) {
            $bodyBuilder = new \Http\Message\MultipartStream\MultipartStreamBuilder($streamFactory);
            $formParameters = $serializer->normalize($this->body, 'json');
            foreach ($formParameters as $key => $value) {
                $value = is_int($value) ? (string) $value : $value;
                $bodyBuilder->addResource($key, $value);
            }
            return [['Content-Type' => ['multipart/form-data; boundary="' . ($bodyBuilder->getBoundary() . '"')]], $bodyBuilder->build()];
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
     * @throws \Vendor\Library\Generated\Exception\PostFilesBadRequestException
     *
     * @return null|\Vendor\Library\Generated\Model\FilesPostResponse200
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Vendor\\Library\\Generated\\Model\\FilesPostResponse200', 'json');
        }
        if (is_null($contentType) === false && (400 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Vendor\Library\Generated\Exception\PostFilesBadRequestException($serializer->deserialize($body, 'Vendor\\Library\\Generated\\Model\\FilesPostResponse400', 'json'), $response);
        }
    }
    public function getAuthenticationScopes() : array
    {
        return ['HTTP_1'];
    }
}