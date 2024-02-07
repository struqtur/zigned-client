<?php

namespace Struqtur\Zigned\Exception;

class PutAgreementsAgreementIdBadRequestException extends BadRequestException
{
    /**
     * @var \Struqtur\Zigned\Model\AgreementsAgreementIdPutResponse400
     */
    private $agreementsAgreementIdPutResponse400;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\Struqtur\Zigned\Model\AgreementsAgreementIdPutResponse400 $agreementsAgreementIdPutResponse400, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('PUT /agreements/:agreement_id Error response');
        $this->agreementsAgreementIdPutResponse400 = $agreementsAgreementIdPutResponse400;
        $this->response = $response;
    }
    public function getAgreementsAgreementIdPutResponse400() : \Struqtur\Zigned\Model\AgreementsAgreementIdPutResponse400
    {
        return $this->agreementsAgreementIdPutResponse400;
    }
    public function getResponse() : \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}