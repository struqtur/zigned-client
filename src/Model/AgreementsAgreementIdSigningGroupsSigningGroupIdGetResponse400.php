<?php

namespace Struqtur\Zigned\Model;

class AgreementsAgreementIdSigningGroupsSigningGroupIdGetResponse400 extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property) : bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * 
     *
     * @var string
     */
    protected $status;
    /**
     * 
     *
     * @var AgreementsAgreementIdSigningGroupsSigningGroupIdGetResponse400Error
     */
    protected $error;
    /**
     * 
     *
     * @return string
     */
    public function getStatus() : string
    {
        return $this->status;
    }
    /**
     * 
     *
     * @param string $status
     *
     * @return self
     */
    public function setStatus(string $status) : self
    {
        $this->initialized['status'] = true;
        $this->status = $status;
        return $this;
    }
    /**
     * 
     *
     * @return AgreementsAgreementIdSigningGroupsSigningGroupIdGetResponse400Error
     */
    public function getError() : AgreementsAgreementIdSigningGroupsSigningGroupIdGetResponse400Error
    {
        return $this->error;
    }
    /**
     * 
     *
     * @param AgreementsAgreementIdSigningGroupsSigningGroupIdGetResponse400Error $error
     *
     * @return self
     */
    public function setError(AgreementsAgreementIdSigningGroupsSigningGroupIdGetResponse400Error $error) : self
    {
        $this->initialized['error'] = true;
        $this->error = $error;
        return $this;
    }
}