<?php

namespace Struqtur\Zigned\Api\Exception;

class DeleteAgreementsAgreementIdDocumentsMainBadRequestException extends BadRequestException
{
    /**
     * @var \Struqtur\Zigned\Api\Model\AgreementsAgreementIdDocumentsMainDeleteResponse400
     */
    private $agreementsAgreementIdDocumentsMainDeleteResponse400;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\Struqtur\Zigned\Api\Model\AgreementsAgreementIdDocumentsMainDeleteResponse400 $agreementsAgreementIdDocumentsMainDeleteResponse400, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('DELETE /agreements/:agreement_id/documents/main Error response');
        $this->agreementsAgreementIdDocumentsMainDeleteResponse400 = $agreementsAgreementIdDocumentsMainDeleteResponse400;
        $this->response = $response;
    }
    public function getAgreementsAgreementIdDocumentsMainDeleteResponse400() : \Struqtur\Zigned\Api\Model\AgreementsAgreementIdDocumentsMainDeleteResponse400
    {
        return $this->agreementsAgreementIdDocumentsMainDeleteResponse400;
    }
    public function getResponse() : \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}