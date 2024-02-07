<?php

namespace Vendor\Library\Generated\Exception;

class GetAgreementsAgreementIdBadRequestException extends BadRequestException
{
    /**
     * @var \Vendor\Library\Generated\Model\AgreementsAgreementIdGetResponse400
     */
    private $agreementsAgreementIdGetResponse400;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\Vendor\Library\Generated\Model\AgreementsAgreementIdGetResponse400 $agreementsAgreementIdGetResponse400, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('GET /agreements/:agreement_id Error response');
        $this->agreementsAgreementIdGetResponse400 = $agreementsAgreementIdGetResponse400;
        $this->response = $response;
    }
    public function getAgreementsAgreementIdGetResponse400() : \Vendor\Library\Generated\Model\AgreementsAgreementIdGetResponse400
    {
        return $this->agreementsAgreementIdGetResponse400;
    }
    public function getResponse() : \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}