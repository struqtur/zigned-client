<?php

namespace Vendor\Library\Generated\Exception;

class PostThemesBadRequestException extends BadRequestException
{
    /**
     * @var \Vendor\Library\Generated\Model\ThemesPostResponse400
     */
    private $themesPostResponse400;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\Vendor\Library\Generated\Model\ThemesPostResponse400 $themesPostResponse400, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('POST /themes Error response');
        $this->themesPostResponse400 = $themesPostResponse400;
        $this->response = $response;
    }
    public function getThemesPostResponse400() : \Vendor\Library\Generated\Model\ThemesPostResponse400
    {
        return $this->themesPostResponse400;
    }
    public function getResponse() : \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}