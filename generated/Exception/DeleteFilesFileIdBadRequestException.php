<?php

namespace Vendor\Library\Generated\Exception;

class DeleteFilesFileIdBadRequestException extends BadRequestException
{
    /**
     * @var \Vendor\Library\Generated\Model\FilesFileIdDeleteResponse400
     */
    private $filesFileIdDeleteResponse400;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\Vendor\Library\Generated\Model\FilesFileIdDeleteResponse400 $filesFileIdDeleteResponse400, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('DELETE /files/:file_id Error response');
        $this->filesFileIdDeleteResponse400 = $filesFileIdDeleteResponse400;
        $this->response = $response;
    }
    public function getFilesFileIdDeleteResponse400() : \Vendor\Library\Generated\Model\FilesFileIdDeleteResponse400
    {
        return $this->filesFileIdDeleteResponse400;
    }
    public function getResponse() : \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}