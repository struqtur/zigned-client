<?php

namespace Struqtur\Zigned\Exception;

class GetThemesBadRequestException extends BadRequestException
{
    /**
     * @var \Struqtur\Zigned\Model\ThemesGetResponse400
     */
    private $themesGetResponse400;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\Struqtur\Zigned\Model\ThemesGetResponse400 $themesGetResponse400, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('GET /themes Error response');
        $this->themesGetResponse400 = $themesGetResponse400;
        $this->response = $response;
    }
    public function getThemesGetResponse400() : \Struqtur\Zigned\Model\ThemesGetResponse400
    {
        return $this->themesGetResponse400;
    }
    public function getResponse() : \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}