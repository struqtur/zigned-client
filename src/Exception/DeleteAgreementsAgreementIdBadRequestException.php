<?php

namespace Struqtur\Zigned\Api\Exception;

class DeleteAgreementsAgreementIdBadRequestException extends BadRequestException
{
    /**
     * @var \Struqtur\Zigned\Api\Model\AgreementsAgreementIdDeleteResponse400
     */
    private $agreementsAgreementIdDeleteResponse400;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\Struqtur\Zigned\Api\Model\AgreementsAgreementIdDeleteResponse400 $agreementsAgreementIdDeleteResponse400, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('DELETE /agreements/:agreement_id Error response');
        $this->agreementsAgreementIdDeleteResponse400 = $agreementsAgreementIdDeleteResponse400;
        $this->response = $response;
    }
    public function getAgreementsAgreementIdDeleteResponse400() : \Struqtur\Zigned\Api\Model\AgreementsAgreementIdDeleteResponse400
    {
        return $this->agreementsAgreementIdDeleteResponse400;
    }
    public function getResponse() : \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}