<?php

namespace Vendor\Library\Generated\Endpoint;

class DeleteThemesThemeId extends \Vendor\Library\Generated\Runtime\Client\BaseEndpoint implements \Vendor\Library\Generated\Runtime\Client\Endpoint
{
    protected $theme_id;
    /**
     * Deletes a theme created for the account associated with the authenticated client.
     *
     * @param string $themeId The ID of the theme to delete
     */
    public function __construct(string $themeId)
    {
        $this->theme_id = $themeId;
    }
    use \Vendor\Library\Generated\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'DELETE';
    }
    public function getUri() : string
    {
        return str_replace(['{theme_id}'], [$this->theme_id], '/themes/{theme_id}');
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
     * @throws \Vendor\Library\Generated\Exception\DeleteThemesThemeIdBadRequestException
     *
     * @return null|\Vendor\Library\Generated\Model\ThemesThemeIdDeleteResponse200
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Vendor\\Library\\Generated\\Model\\ThemesThemeIdDeleteResponse200', 'json');
        }
        if (is_null($contentType) === false && (400 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Vendor\Library\Generated\Exception\DeleteThemesThemeIdBadRequestException($serializer->deserialize($body, 'Vendor\\Library\\Generated\\Model\\ThemesThemeIdDeleteResponse400', 'json'), $response);
        }
    }
    public function getAuthenticationScopes() : array
    {
        return ['HTTP_1'];
    }
}