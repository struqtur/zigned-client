<?php

namespace Struqtur\Zigned\Exception;

class DeleteThemesThemeIdBadRequestException extends BadRequestException
{
    /**
     * @var \Struqtur\Zigned\Model\ThemesThemeIdDeleteResponse400
     */
    private $themesThemeIdDeleteResponse400;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\Struqtur\Zigned\Model\ThemesThemeIdDeleteResponse400 $themesThemeIdDeleteResponse400, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('DELETE /themes/:theme_id Error response');
        $this->themesThemeIdDeleteResponse400 = $themesThemeIdDeleteResponse400;
        $this->response = $response;
    }
    public function getThemesThemeIdDeleteResponse400() : \Struqtur\Zigned\Model\ThemesThemeIdDeleteResponse400
    {
        return $this->themesThemeIdDeleteResponse400;
    }
    public function getResponse() : \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}