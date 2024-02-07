<?php

namespace Struqtur\Zigned\Exception;

class GetFilesBadRequestException extends BadRequestException
{
    /**
     * @var \Struqtur\Zigned\Model\FilesGetResponse400
     */
    private $filesGetResponse400;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\Struqtur\Zigned\Model\FilesGetResponse400 $filesGetResponse400, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('GET /files Error response');
        $this->filesGetResponse400 = $filesGetResponse400;
        $this->response = $response;
    }
    public function getFilesGetResponse400() : \Struqtur\Zigned\Model\FilesGetResponse400
    {
        return $this->filesGetResponse400;
    }
    public function getResponse() : \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}