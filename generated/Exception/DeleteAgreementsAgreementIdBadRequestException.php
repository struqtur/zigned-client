<?php

namespace Vendor\Library\Generated\Exception;

class DeleteAgreementsAgreementIdBadRequestException extends BadRequestException
{
    /**
     * @var \Vendor\Library\Generated\Model\AgreementsAgreementIdDeleteResponse400
     */
    private $agreementsAgreementIdDeleteResponse400;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\Vendor\Library\Generated\Model\AgreementsAgreementIdDeleteResponse400 $agreementsAgreementIdDeleteResponse400, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('DELETE /agreements/:agreement_id Error response');
        $this->agreementsAgreementIdDeleteResponse400 = $agreementsAgreementIdDeleteResponse400;
        $this->response = $response;
    }
    public function getAgreementsAgreementIdDeleteResponse400() : \Vendor\Library\Generated\Model\AgreementsAgreementIdDeleteResponse400
    {
        return $this->agreementsAgreementIdDeleteResponse400;
    }
    public function getResponse() : \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}