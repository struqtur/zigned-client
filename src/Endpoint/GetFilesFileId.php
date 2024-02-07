<?php

namespace Struqtur\Zigned\Endpoint;

class GetFilesFileId extends \Struqtur\Zigned\Runtime\Client\BaseEndpoint implements \Struqtur\Zigned\Runtime\Client\Endpoint
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
    use \Struqtur\Zigned\Runtime\Client\EndpointTrait;
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
     * @throws \Struqtur\Zigned\Exception\GetFilesFileIdBadRequestException
     *
     * @return null|\Struqtur\Zigned\Model\FilesFileIdGetResponse200
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Struqtur\\Zigned\\Model\\FilesFileIdGetResponse200', 'json');
        }
        if (is_null($contentType) === false && (400 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Struqtur\Zigned\Exception\GetFilesFileIdBadRequestException($serializer->deserialize($body, 'Struqtur\\Zigned\\Model\\FilesFileIdGetResponse400', 'json'), $response);
        }
    }
    public function getAuthenticationScopes() : array
    {
        return ['HTTP_1'];
    }
}