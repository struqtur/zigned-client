<?php

namespace Struqtur\Zigned\Api\Exception;

class DeleteThemesThemeIdBadRequestException extends BadRequestException
{
    /**
     * @var \Struqtur\Zigned\Api\Model\ThemesThemeIdDeleteResponse400
     */
    private $themesThemeIdDeleteResponse400;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\Struqtur\Zigned\Api\Model\ThemesThemeIdDeleteResponse400 $themesThemeIdDeleteResponse400, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('DELETE /themes/:theme_id Error response');
        $this->themesThemeIdDeleteResponse400 = $themesThemeIdDeleteResponse400;
        $this->response = $response;
    }
    public function getThemesThemeIdDeleteResponse400() : \Struqtur\Zigned\Api\Model\ThemesThemeIdDeleteResponse400
    {
        return $this->themesThemeIdDeleteResponse400;
    }
    public function getResponse() : \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}