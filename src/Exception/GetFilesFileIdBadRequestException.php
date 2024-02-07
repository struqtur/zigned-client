<?php

namespace Struqtur\Zigned\Api\Exception;

class GetFilesFileIdBadRequestException extends BadRequestException
{
    /**
     * @var \Struqtur\Zigned\Api\Model\FilesFileIdGetResponse400
     */
    private $filesFileIdGetResponse400;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\Struqtur\Zigned\Api\Model\FilesFileIdGetResponse400 $filesFileIdGetResponse400, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('GET /files/:file_id Error response');
        $this->filesFileIdGetResponse400 = $filesFileIdGetResponse400;
        $this->response = $response;
    }
    public function getFilesFileIdGetResponse400() : \Struqtur\Zigned\Api\Model\FilesFileIdGetResponse400
    {
        return $this->filesFileIdGetResponse400;
    }
    public function getResponse() : \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}