<?php

namespace Struqtur\Zigned\Exception;

class PostThemesBadRequestException extends BadRequestException
{
    /**
     * @var \Struqtur\Zigned\Model\ThemesPostResponse400
     */
    private $themesPostResponse400;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\Struqtur\Zigned\Model\ThemesPostResponse400 $themesPostResponse400, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('POST /themes Error response');
        $this->themesPostResponse400 = $themesPostResponse400;
        $this->response = $response;
    }
    public function getThemesPostResponse400() : \Struqtur\Zigned\Model\ThemesPostResponse400
    {
        return $this->themesPostResponse400;
    }
    public function getResponse() : \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}