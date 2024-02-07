<?php

namespace Struqtur\Zigned\Api\Exception;

class GetThemesThemeIdBadRequestException extends BadRequestException
{
    /**
     * @var \Struqtur\Zigned\Api\Model\ThemesThemeIdGetResponse400
     */
    private $themesThemeIdGetResponse400;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\Struqtur\Zigned\Api\Model\ThemesThemeIdGetResponse400 $themesThemeIdGetResponse400, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('GET /themes/:theme_id Error response');
        $this->themesThemeIdGetResponse400 = $themesThemeIdGetResponse400;
        $this->response = $response;
    }
    public function getThemesThemeIdGetResponse400() : \Struqtur\Zigned\Api\Model\ThemesThemeIdGetResponse400
    {
        return $this->themesThemeIdGetResponse400;
    }
    public function getResponse() : \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}