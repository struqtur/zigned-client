<?php

namespace Struqtur\Zigned\Api\Endpoint;

class GetFilesFileId extends \Struqtur\Zigned\Api\Runtime\Client\BaseEndpoint implements \Struqtur\Zigned\Api\Runtime\Client\Endpoint
{
    protected $file_id;
    /**
     * Retrieve a file uploaded by the authenticated client or user
     *
     * @param string $fileId GET /files/:file_id parameter
     */
    public function __construct(string $fileId)
    {
        $this->file_id = $fileId;
    }
    use \Struqtur\Zigned\Api\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return str_replace(['{file_id}'], [$this->file_id], '/files/{file_id}');
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
     * @throws \Struqtur\Zigned\Api\Exception\GetFilesFileIdBadRequestException
     *
     * @return null|\Struqtur\Zigned\Api\Model\FilesFileIdGetResponse200
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Struqtur\\Zigned\\Api\\Model\\FilesFileIdGetResponse200', 'json');
        }
        if (is_null($contentType) === false && (400 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Struqtur\Zigned\Api\Exception\GetFilesFileIdBadRequestException($serializer->deserialize($body, 'Struqtur\\Zigned\\Api\\Model\\FilesFileIdGetResponse400', 'json'), $response);
        }
    }
    public function getAuthenticationScopes() : array
    {
        return ['HTTP_1'];
    }
}