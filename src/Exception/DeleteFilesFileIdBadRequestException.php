<?php

namespace Struqtur\Zigned\Api\Exception;

class DeleteFilesFileIdBadRequestException extends BadRequestException
{
    /**
     * @var \Struqtur\Zigned\Api\Model\FilesFileIdDeleteResponse400
     */
    private $filesFileIdDeleteResponse400;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\Struqtur\Zigned\Api\Model\FilesFileIdDeleteResponse400 $filesFileIdDeleteResponse400, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('DELETE /files/:file_id Error response');
        $this->filesFileIdDeleteResponse400 = $filesFileIdDeleteResponse400;
        $this->response = $response;
    }
    public function getFilesFileIdDeleteResponse400() : \Struqtur\Zigned\Api\Model\FilesFileIdDeleteResponse400
    {
        return $this->filesFileIdDeleteResponse400;
    }
    public function getResponse() : \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}