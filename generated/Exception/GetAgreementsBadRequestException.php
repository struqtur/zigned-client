<?php

namespace Vendor\Library\Generated\Exception;

class GetAgreementsBadRequestException extends BadRequestException
{
    /**
     * @var \Vendor\Library\Generated\Model\AgreementsGetResponse400
     */
    private $agreementsGetResponse400;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\Vendor\Library\Generated\Model\AgreementsGetResponse400 $agreementsGetResponse400, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('GET /agreements Error response');
        $this->agreementsGetResponse400 = $agreementsGetResponse400;
        $this->response = $response;
    }
    public function getAgreementsGetResponse400() : \Vendor\Library\Generated\Model\AgreementsGetResponse400
    {
        return $this->agreementsGetResponse400;
    }
    public function getResponse() : \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}