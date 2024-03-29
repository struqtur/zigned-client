<?php

namespace Struqtur\Zigned\Exception;

class PostFilesBadRequestException extends BadRequestException
{
    /**
     * @var \Struqtur\Zigned\Model\FilesPostResponse400
     */
    private $filesPostResponse400;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\Struqtur\Zigned\Model\FilesPostResponse400 $filesPostResponse400, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('POST /files Error response');
        $this->filesPostResponse400 = $filesPostResponse400;
        $this->response = $response;
    }
    public function getFilesPostResponse400() : \Struqtur\Zigned\Model\FilesPostResponse400
    {
        return $this->filesPostResponse400;
    }
    public function getResponse() : \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}