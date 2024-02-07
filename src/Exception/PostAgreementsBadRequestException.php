<?php

namespace Struqtur\Zigned\Api\Exception;

class PostAgreementsBadRequestException extends BadRequestException
{
    /**
     * @var \Struqtur\Zigned\Api\Model\AgreementsPostResponse400
     */
    private $agreementsPostResponse400;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\Struqtur\Zigned\Api\Model\AgreementsPostResponse400 $agreementsPostResponse400, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('POST /agreements Error response');
        $this->agreementsPostResponse400 = $agreementsPostResponse400;
        $this->response = $response;
    }
    public function getAgreementsPostResponse400() : \Struqtur\Zigned\Api\Model\AgreementsPostResponse400
    {
        return $this->agreementsPostResponse400;
    }
    public function getResponse() : \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}