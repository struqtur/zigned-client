<?php

namespace Vendor\Library\Generated\Endpoint;

class DeleteFilesFileId extends \Vendor\Library\Generated\Runtime\Client\BaseEndpoint implements \Vendor\Library\Generated\Runtime\Client\Endpoint
{
    protected $file_id;
    /**
     * Delete a file uploaded by the authenticated client or user.
     *
     * @param string $fileId DELETE /files/:file_id parameter
     */
    public function __construct(string $fileId)
    {
        $this->file_id = $fileId;
    }
    use \Vendor\Library\Generated\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'DELETE';
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
     * @throws \Vendor\Library\Generated\Exception\DeleteFilesFileIdBadRequestException
     *
     * @return null|\Vendor\Library\Generated\Model\FilesFileIdDeleteResponse200
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Vendor\\Library\\Generated\\Model\\FilesFileIdDeleteResponse200', 'json');
        }
        if (is_null($contentType) === false && (400 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Vendor\Library\Generated\Exception\DeleteFilesFileIdBadRequestException($serializer->deserialize($body, 'Vendor\\Library\\Generated\\Model\\FilesFileIdDeleteResponse400', 'json'), $response);
        }
    }
    public function getAuthenticationScopes() : array
    {
        return ['HTTP_1'];
    }
}